<?php

namespace App\DataTables;

use App\Models\ClientTransaction;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class ClientTransactionDataTable extends DataTable
{

//    protected string $printPreview = 'admin.clients.transactions_print' ;



    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query){
                return view('admin.datatableHtmlBuilderRender.clientTransaction.action', compact('query'));
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
            ->editColumn('amount_paid_add_to_client_balance', function ($query){
                return $query -> amount_paid_add_to_client_balance ? $query -> amount_paid_add_to_client_balance: '-';
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
    public function query(ClientTransaction $model): QueryBuilder
    {
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');
        $client_id = request('client_id');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $clientTransaction = $model->newQuery() -> where('client_id', $client_id);

        if (!empty($start_date) && !empty($end_date)) {
            $clientTransaction = $model->newQuery()->whereBetween('updated_at', $date_range)-> where('client_id', $client_id);
        }
        return $clientTransaction;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('clienttransaction-table')
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
//                        Button::make('excel'),
//                        Button::make('csv'),
//                        Button::make('pdf'),
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
            Column::make('DT_RowIndex')
                -> title('#')
                ->searchable(false),

            Column::make('transaction_date')
                -> title( __('trans.transaction date') ),

            Column::make('details')
                -> title( __('trans.details') ),

            Column::make('debit')
                -> title( __('trans.debit') ),

            Column::make('credit')
                -> title( __('trans.credit') ),

            Column::make('client_balance')
                -> title( __('trans.balance') ),

            Column::make('amount_paid')
                -> title( __('trans.amount paid in money safe') )
                ->printable(false),

            Column::make('amount_paid_bank')
                -> title( __('trans.amount paid in bank') )
                ->printable(false),

            Column::make('amount_paid_add_to_client_balance')
                -> title( __('trans.amount paid add to client balance') )
                ->printable(false),

            Column::make('amount_due')
                -> title( __('trans.amount due') )
                ->printable(false),

            Column::make('editor')
                -> title( __('trans.editor') )
                ->printable(false)
                ->searchable(false),

            Column::make('updated_at')
                -> title( __('trans.last update') )
                ->printable(false)
                ->addClass('date_dir_setting'),

            Column::make('action')
                -> title( __('trans.source') )
                ->printable(false)
                ->searchable(false)
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ClientTransaction_' . date('YmdHis');
    }
}
