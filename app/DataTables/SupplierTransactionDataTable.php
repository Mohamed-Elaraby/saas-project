<?php

namespace App\DataTables;

use App\Models\SupplierTransaction;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class SupplierTransactionDataTable extends DataTable
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
                return view('admin.datatableHtmlBuilderRender.supplierTransaction.action', compact('query'));
            })
            ->editColumn('debit', function ($query){
                return $query -> debit ? $query -> debit: '-';
            })
            ->editColumn('credit', function ($query){
                return $query -> credit ? $query -> credit: '-';
            })
            ->editColumn('amount_paid', function ($query){
                return $query -> amount_paid ? $query -> amount_paid: '-';
            })
            ->editColumn('amount_paid_bank', function ($query){
                return $query -> amount_paid_bank ? $query -> amount_paid_bank: '-';
            })
            ->editColumn('amount_paid_subtract_from_supplier_balance', function ($query){
                return $query -> amount_paid_subtract_from_supplier_balance ? $query -> amount_paid_subtract_from_supplier_balance: '-';
            })
            ->editColumn('amount_due', function ($query){
                return $query -> amount_due == '' ? '-' : ($query -> amount_due == 0 ? '-' : $query -> amount_due ) ;
            })
            ->editColumn('editor', function ($query){
                return $query -> user ? $query -> user -> name : '';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(SupplierTransaction $model): QueryBuilder
    {
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');
        $supplier_id = request('supplier_id');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $supplierTransaction = $model->newQuery() -> where('supplier_id', $supplier_id);

        if (!empty($start_date) && !empty($end_date)) {
            $supplierTransaction = $model->newQuery()->whereBetween('updated_at', $date_range)-> where('supplier_id', $supplier_id);
        }
        return $supplierTransaction;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('suppliertransaction-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('lfrtip') // Bfrtip default
                    ->scrollX(true)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
                    ->autoWidth(true)
                    ->orderBy(11, 'ASC')
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')-> title('#')->searchable(false),

            Column::make('transaction_date')-> title( __('trans.transaction date') ),

            Column::make('details')-> title( __('trans.details') ),

            Column::make('debit')-> title( __('trans.debit') ),

            Column::make('credit')-> title( __('trans.credit') ),

            Column::make('supplier_balance')-> title( __('trans.balance') ),

            Column::make('amount_paid')-> title( __('trans.amount paid in money safe') )->printable(false),

            Column::make('amount_paid_bank')-> title( __('trans.amount paid in bank') )->printable(false),

            Column::make('amount_paid_subtract_from_supplier_balance')-> title( __('trans.amount paid subtract from supplier balance') )->printable(false),

            Column::make('amount_due')-> title( __('trans.amount due') )->printable(false),

            Column::make('editor')-> title( __('trans.editor') )->printable(false)->searchable(false),

            Column::make('updated_at')-> title( __('trans.last update') )->printable(false),

            Column::make('action')-> title( __('trans.source') )->printable(false)->searchable(false)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'SupplierTransaction_' . date('YmdHis');
    }
}
