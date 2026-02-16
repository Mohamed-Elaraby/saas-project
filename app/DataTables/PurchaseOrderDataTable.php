<?php

namespace App\DataTables;

use App\Models\PurchaseOrder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class PurchaseOrderDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query){
                return view('admin.datatableHtmlBuilderRender.purchaseOrder.action', compact('query'));
            })
            ->editColumn('branch_id', function ($query){
                return $query->branch->display_name ?? '';
            })
            ->editColumn('supplier_id', function ($query){
                return '<a href="'.route('admin.supplierTransactions', $query -> supplier ->id).'">'.$query -> supplier -> name.'</a>';
            })
            ->editColumn('user_id', function ($query){
                return $query->user->name ?? '';
            })
            ->addColumn('related_products', function ($query){
                return "<a class='btn btn-warning' href='" . route('admin.purchaseOrderProducts', $query -> id) . "'>". __('trans.related products') ."</a>";
            })
            ->addColumn('show_invoice', function ($query) {
                if (request('status') == 'close')
                {
                    return "<a class='btn btn-warning' href='" . route('admin.purchaseOrders.show', $query->id, ['status' => 'close']) . "'>" . __('trans.show invoice') . "</a>";
                }else {
                    return '<span style="color: #00a65a; text-align: center">فاتورة مفتوحة</span>';
                }
            })
            ->addColumn('return_invoices', function ($query){
                return "<a class='btn btn-primary' href='" . route('admin.purchaseOrderReturns.index', ['purchase_order_id' => $query -> id]) . "'>". __('trans.show return invoices') ."</a>";
            })
            ->rawColumns(['action', 'related_products', 'show_invoice', 'supplier_id', 'return_invoices']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(PurchaseOrder $model): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');
        $branch_id = $this -> request() -> get('branch_id');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

//        $purchaseOrder = $model->newQuery();
        $purchaseOrder = $model->newQuery() -> checkUserRole() -> checkOrderStatus()
            ->where(function ($query)use ($start_date, $end_date, $date_range ){
                if ($start_date && $end_date)
                {
                    $query-> whereBetween('created_at' ,$date_range);
                }
            })
            ->where(function ($query)use ($branch_id){
                if ($branch_id)
                {
                    $query-> where('branch_id' ,$branch_id);
                }
            });
        return $purchaseOrder;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('purchaseorder-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->processing(true)
                    ->serverSide(true)
                    ->scrollX(false)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
                    ->orderBy(12)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('add')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')                 -> title('#') ->searchable(false),
            Column::make('related_products')            -> title( __('trans.all products') ),
            Column::make('show_invoice')                -> title( __('trans.full invoice') ),
            Column::make('return_invoices')             -> title( __('trans.returns invoices') ),
            Column::make('invoice_number')              -> title( __('trans.invoice number') ),
            Column::make('invoice_date')                -> title( __('trans.invoice date') ),
            Column::make('total_amount_due')            -> title( __('trans.total amount due') ),
            Column::make('amount_paid')                 -> title( __('trans.amount paid in money safe') ),
            Column::make('amount_paid_bank')                 -> title( __('trans.amount paid in bank') ),
            Column::make('amount_due')                  -> title( __('trans.amount due') ),
            Column::make('branch_id')                   -> title( __('trans.branch') ),
            Column::make('supplier_id')                 -> title( __('trans.supplier') ),
//            Column::make('notes')                       -> title( __('trans.notes') ),
            Column::make('updated_at')                  -> title( __('trans.last update') ),
            Column::make('action')                      -> title( __('trans.action') )
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'PurchaseOrder_' . date('YmdHis');
    }
}
