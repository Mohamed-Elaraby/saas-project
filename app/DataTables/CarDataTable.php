<?php

namespace App\DataTables;

use App\Models\Car;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class CarDataTable extends DataTable
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
                return view('admin.datatableHtmlBuilderRender.car.action', compact('query'));
            })
            ->editColumn('client_id', function ($query){
                return $query->client ? $query->client->name : '';
            })
            ->editColumn('car_type_id', function ($query){
                return $query->carType ? $query->carType->name : '';
            })
            ->editColumn('car_size_id', function ($query){
                return $query->carSize ? $query->carSize->name : '';
            })
            ->editColumn('car_engine_id', function ($query){
                return $query->carEngine ? $query->carEngine->name : '';
            })
            ->editColumn('car_development_code_id', function ($query){
                return $query->carDevelopmentCode ? $query->carDevelopmentCode->name : '';
            })
            ->editColumn('car_model_id', function ($query){
                return $query->carModel ? $query->carModel->name : '';
            })
            ->filterColumn('car_type_id', function($query, $keyword) {
                $query->whereHas('carType', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->filterColumn('car_size_id', function($query, $keyword) {
                $query->whereHas('carSize', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->filterColumn('car_engine_id', function($query, $keyword) {
                $query->whereHas('carEngine', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->filterColumn('car_development_code_id', function($query, $keyword) {
                $query->whereHas('carDevelopmentCode', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->filterColumn('car_model_id', function($query, $keyword) {
                $query->whereHas('carModel', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->filterColumn('client_id', function($query, $keyword) {
                $query->whereHas('client', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Car $model): QueryBuilder
    {
        $car = $model->newQuery();
        if (request()->client_id){
            $car = $model ->newQuery()->where('client_id', request()->client_id);
        }
        return $car;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('car-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(10)
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
            Column::make('client_id')                   -> title( __('trans.client name') ),
            Column::make('car_type_id')                 -> title( __('trans.car type') ),
            Column::make('car_size_id')                 -> title( __('trans.car size') ),
            Column::make('car_engine_id')               -> title( __('trans.engine number') ),
            Column::make('car_development_code_id')     -> title( __('trans.car development code') ),
            Column::make('car_model_id')                -> title( __('trans.model') ),
            Column::make('chassis_number')              -> title( __('trans.chassis number') ),
            Column::make('plate_number')                -> title( __('trans.plate number') ),
            Column::make('car_color')                   -> title( __('trans.car color') ),
            Column::make('updated_at')                  -> title( __('trans.last update') ),
            Column::make('action')                      -> title( __('trans.action') )

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Car_' . date('YmdHis');
    }
}
