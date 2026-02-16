<?php

namespace App\DataTables;

use App\Models\Supplier;
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

class SupplierDataTable extends DataTable
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
                return view('admin.datatableHtmlBuilderRender.supplier.action', compact('query'));
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

    /**
     * Get the query source of dataTable.
     */
    public function query(Supplier $model, Request $request): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $supplier = $model->newQuery();

        if (!empty($start_date) && !empty($end_date)) {
            $supplier = $model->newQuery()->whereBetween('updated_at', $date_range);
        }

        if ($request -> month){
            $supplier = $model ->newQuery()->whereMonth('created_at', Carbon::now()->month);
        }
        return $supplier;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('supplier-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(5)
            ->selectStyleSingle()
            ->processing(true)
            ->serverSide(true)
            ->scrollX(false)
            ->scrollY(false)
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
            Column::make('name')                    -> title( __('trans.supplier name') ),
            Column::make('phone')                   -> title( __('trans.phone') ),
            Column::make('vat_number')              -> title( __('trans.vat number') ),
            Column::make('balance')                 -> title( __('trans.balance') ),
            Column::make('updated_at')              -> title( __('trans.last update') ),
            Column::make('action')                  -> title( __('trans.action') )
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Supplier_' . date('YmdHis');
    }
}
