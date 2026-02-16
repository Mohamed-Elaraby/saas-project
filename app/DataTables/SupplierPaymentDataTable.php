<?php

namespace App\DataTables;

use App\Models\SupplierPayment;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class SupplierPaymentDataTable extends DataTable
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
                return $query -> branch ?$query -> branch -> name: '';
            })
            ->editColumn('user_id', function ($query){
                return $query -> user ? $query -> user -> name : '';
            })
            ->editColumn('supplier_id', function ($query){
                return '<a href="'.route('admin.supplierTransactions', $query -> supplier ->id).'">'.$query -> supplier -> name.'</a>';
            })

            ->editColumn('receipt_number', function ($query){
                return '<a href="'.route('admin.supplierPayments.show', $query -> id).'">#'.$query -> receipt_number.'</a>';
            })
            ->addColumn('action', function ($query){
                return view('admin.datatableHtmlBuilderRender.supplierPayment.action', compact('query'));
            })

            ->addColumn('source', function ($query){
                return '<a class="btn btn-primary btn-sm" href="'.route('admin.supplierPayments.show', $query -> id).'">'. __('trans.supplier payment') .'</a>';
            })

            ->rawColumns(['action', 'supplier_id', 'source', 'receipt_number']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(SupplierPayment $model): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $supplierPayment = $model->newQuery();

        if (!empty($start_date) && !empty($end_date)) {
            $supplierPayment = $model->newQuery()->whereBetween('updated_at', $date_range);
        }
        return $supplierPayment;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('supplierpayment-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('lfrtip')
            ->orderBy(5)
            ->selectStyleSingle()
            ->processing(true)
            ->serverSide(true)
            ->searching(true)
            ->responsive(true)
            ->autoWidth(false)
            ->buttons([
                Button::make('add'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')         -> title('#') ->searchable(false),
            Column::make('receipt_number')      -> title( __('trans.receipt number') ),
            Column::make('amount_paid')         -> title( __('trans.amount paid in money safe') ),
            Column::make('amount_paid_bank')    -> title( __('trans.amount paid in bank') ),
            Column::make('notes')               -> title( __('trans.notes') ),
            Column::make('payment_date')        -> title( __('trans.payment date') ),
            Column::make('user_id')             -> title( __('trans.editor') ),
            Column::make('branch_id')           -> title( __('trans.branch') ),
            Column::make('supplier_id')           -> title( __('trans.supplier') ),
            Column::make('updated_at')          -> title( __('trans.last update') ),
            Column::make('source')              -> title( __('trans.source') )
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'SupplierPayment_' . date('YmdHis');
    }
}
