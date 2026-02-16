<?php

namespace App\DataTables;

use App\Models\Client;
use App\Traits\SettingTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class ClientDataTable extends DataTable
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
                return view('admin.datatableHtmlBuilderRender.client.action', compact('query'));
            })
            ->editColumn('balance', function ($query){
                if ($query -> balance > 0)
                {
                    return "<div style='color: green; '>".$query -> balance . ' ' . SettingTrait::getSetting()->currency ." <i class='fa fa-level-up'></i></div>";
                }elseif($query -> balance < 0){
                    return "<div style='color: red; '>".$query -> balance . ' ' . SettingTrait::getSetting()->currency ." <i class='fa fa-level-down'></i></div>";
                }else{
                    return $query -> balance . ' ' . SettingTrait::getSetting()->currency;
                }
            })
            ->rawColumns(['action', 'balance']);
    }


    public function query(Client $model, Request $request): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $client = $model->newQuery();

        if (!empty($start_date) && !empty($end_date)) {
            $client = $model->newQuery()->whereBetween('updated_at', $date_range);
        }

        if ($request -> month){
            $client = $model ->newQuery()->whereMonth('created_at', Carbon::now()->month);
        }
        return $client;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('client-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(8)
                    ->selectStyleSingle()
                    ->processing(true)
                    ->serverSide(true)
                    ->scrollX(true)
                    ->scrollY(true)
                    ->searching(true)
                    ->responsive(true)
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
            Column::make('DT_RowIndex')             -> title('#') ->searchable(false),
            Column::make('name')                    -> title( __('trans.client name') ),
            Column::make('phone')                   -> title( __('trans.phone') ),
            Column::make('vat_number')              -> title( __('trans.vat number') ),
            Column::make('employer')                -> title( __('trans.employer') ),
            Column::make('other_car')               -> title( __('trans.other car') ),
            Column::make('how_you_now_us')          -> title( __('trans.how you now us') )->addClass('no_print_in_datatable'),
            Column::make('balance')                 -> title( __('trans.balance') )
                ->addClass('balance_column_color'),
            Column::make('updated_at')              -> title( __('trans.last update') )->addClass('no_print_in_datatable')
                ->addClass('date_dir_setting'),
            Column::make('action')                  -> title( __('trans.action') )->addClass('no_print_in_datatable')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Client_' . date('YmdHis');
    }
}
