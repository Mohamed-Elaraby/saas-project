<?php

namespace App\DataTables;

use App\Models\ExpensesType;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class ExpensesTypeDataTable extends DataTable
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
                return view('admin.datatableHtmlBuilderRender.expensesType.action', compact('query'));
            })

            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(ExpensesType $model): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $expensesType = $model->newQuery();

        if (!empty($start_date) && !empty($end_date)) {
            $expensesType = $model->newQuery()->whereBetween('updated_at', $date_range);
        }
        return $expensesType;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('expensestype-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
//                    ->dom('lfrtip')
                    ->scrollX(false)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
                    ->autoWidth(false)
                    ->processing(true)
                    ->serverSide(true)
                    ->orderBy(2)
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
            Column::make('DT_RowIndex')         -> title('#') ->searchable(false),
            Column::make('name')                -> title( __('trans.expenses type name') ),
            Column::make('updated_at')          -> title( __('trans.last update')),
            Column::make('action')              -> title( __('trans.action') )
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'ExpensesType_' . date('YmdHis');
    }
}
