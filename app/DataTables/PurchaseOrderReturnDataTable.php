<?php

namespace App\DataTables;

use App\Models\PurchaseOrderReturn;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class PurchaseOrderReturnDataTable extends DataTable
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
            ->editColumn('branch_id', function ($query){
                return $query->branch ? $query->branch->display_name : '';
            })
            ->editColumn('user_id', function ($query){
                return $query->user ? $query->user->name : '';
            })
            ->addColumn('related_products', function ($query){
                return "<a class='btn btn-warning' href='" . route('admin.purchaseOrderReturnProducts', $query -> id) . "'>". __('trans.related products') ."</a>";
            })
            ->addColumn('show_invoice', function ($query){
                return "<a class='btn btn-warning' href='" . route('admin.purchaseOrderReturns.show', $query -> id) . "'>". __('trans.show invoice') ."</a>";
            })
            ->addColumn('purchase_invoice_number', function ($query){
                return "<a class='btn btn-success' href='" . route('admin.purchaseOrders.show', $query -> purchaseOrder -> id) . "'>". $query -> purchaseOrder -> invoice_number ."</a>";
            })
            ->rawColumns(['related_products', 'show_invoice', 'purchase_invoice_number']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(PurchaseOrderReturn $model): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');
        $branch_id = $this -> request() -> get('branch_id');
        $purchase_order_id = $this -> request() -> get('purchase_order_id');
        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $purchaseOrderReturns = $model->newQuery()
            ->where(function ($query)use ($start_date, $end_date, $date_range ){
                if ($start_date && $end_date)
                {
                    $query-> whereBetween('created_at' ,$date_range);
                }
            })
            ->where(function ($query)use ($purchase_order_id){
                if ($purchase_order_id)
                {
                    $query-> where('purchase_order_id' ,$purchase_order_id);
                }
            })
            ->where(function ($query)use ($branch_id){
                if ($branch_id)
                {
                    $query-> where('branch_id' ,$branch_id);
                }
            });

        return $purchaseOrderReturns;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('purchaseorderreturn-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->processing(true)
                    ->serverSide(true)
                    ->scrollX(false)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
                    ->orderBy(8)
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
            Column::make('invoice_number')              -> title( __('trans.return invoice number') ),
            Column::make('purchase_invoice_number')         -> title( __('trans.purchase invoice number') ),
            Column::make('invoice_date')                -> title( __('trans.invoice date') ),
            Column::make('total_return_items')          -> title( __('trans.total return items') ),
            Column::make('branch_id')                   -> title( __('trans.branch') ),
//            Column::make('notes')                             -> title( __('trans.notes') ),
            Column::make('updated_at')                  -> title( __('trans.last update') ),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'PurchaseOrderReturn_' . date('YmdHis');
    }
}
