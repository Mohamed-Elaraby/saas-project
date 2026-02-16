<?php

namespace App\DataTables;

use App\Models\Expense;
use App\Models\Expenses;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class ExpensesDataTable extends DataTable
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
                return $query -> branch -> display_name;
            })
            ->editColumn('user_id', function ($query){
                return $query -> user ? $query -> user -> name : '';
            })
            ->editColumn('expenses_type_id', function ($query){
                return $query -> expensesType ? $query -> expensesType -> name : '';
            })
            ->addColumn('action', function ($query){
                return view('admin.datatableHtmlBuilderRender.expenses.action', compact('query'));
            })
            ->filterColumn('expenses_type_id', function($query, $keyword) {
                $query->whereHas('expensesType', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->filterColumn('branch_id', function($query, $keyword) {
                $query->whereHas('branch', function ($q) use ($keyword){
                    $q->where('display_name', 'LIKE', "%{$keyword}%");
                });
            })

            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Expenses $model): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');
        $branch_id = $this -> request() -> get('branch_id');
        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $expenses = $model->newQuery()
            -> where(function ($query){
                if (Auth::user()->branch_id != null)
                {
                    $query -> where('branch_id', Auth::user()->branch_id);
                }
            })
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
        return $expenses;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('expenses-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
//                    ->dom('lfrtip')
                    ->scrollX(false)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
                    ->autoWidth(false)
                    ->lengthMenu([[5,10,25,50,100,-1], [5,10,25,50,100,"الكل"]])
                    ->processing(true)
                    ->serverSide(true)
                    ->orderBy(8)
                    ->selectStyleSingle()
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
            Column::make('expenses_type_id')    -> title( __('trans.expenses type') ),
            Column::make('amount')              -> title( __('trans.amount') ),
            Column::make('notes')               -> title( __('trans.notes') ),
            Column::make('expenses_date')       -> title( __('trans.expenses date') ),
            Column::make('branch_id')           -> title( __('trans.branch') ),
            Column::make('payment_method')      -> title( __('trans.payment method') ),
            Column::make('user_id')             -> title( __('trans.editor') ),
            Column::make('updated_at')          -> title( __('trans.last update') ),
            Column::make('action')              -> title( __('trans.action') )
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Expenses_' . date('YmdHis');
    }
}
