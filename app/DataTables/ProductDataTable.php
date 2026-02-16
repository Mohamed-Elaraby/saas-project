<?php

namespace App\DataTables;

use App\Models\Product;
use App\Traits\SettingTrait;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class ProductDataTable extends DataTable
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
            ->addColumn('action', function ($query){
                return view('admin.datatableHtmlBuilderRender.product.action', compact('query'));
            })
            ->editColumn('sub_category_id', function ($query){
                return $query -> subCategory? $query -> subCategory -> name: '';
            })->editColumn('discount_amount', function ($query){
                $discount_type = $query -> discount_type == 1 ? '('.$query -> discount.'%)': SettingTrait::getSetting()->currency();
                return $query -> discount ? $discount_type .  ' ' . $query -> discount_amount : '';
            })
            ->filterColumn('branch_id', function($query, $keyword) {
                $query->whereHas('branch', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Product $model): QueryBuilder
    {
        // Search Parameters
        $start_date = $this -> request() -> get('start_date');
        $end_date = $this -> request() -> get('end_date');

        // Date Range Used With Search => Array
        $date_range = [$start_date.' 00:00:00', $end_date.' 23:59:59'];

        $product = $model->newQuery();

        if (!empty($start_date) && !empty($end_date)) {
            $product = $model->newQuery()->whereBetween('updated_at', $date_range);
        }
        return $product;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('product-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->processing(true)
                    ->serverSide(true)
                    ->scrollX(false)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
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
            Column::make('code')                        -> title( __('trans.product code') ),
            Column::make('name')                        -> title( __('trans.product name') ),
            Column::make('price')                       -> title( __('trans.purchasing price') ),
            Column::make('discount_amount')             -> title( __('trans.discount amount') ),
            Column::make('price_after_discount')        -> title( __('trans.price after discount') ),
            Column::make('selling_price')               -> title( __('trans.selling price') )->addClass('no_print_in_datatable'),
            Column::make('quantity')                    -> title( __('trans.quantity') ),
            Column::make('sub_category_id')             -> title( __('trans.category') ),
            Column::make('branch_id')                   -> title( __('trans.branch') ),
            Column::make('updated_at')                  -> title( __('trans.last update') )->addClass('no_print_in_datatable'),
            Column::make('action')                      -> title( __('trans.action') )->addClass('no_print_in_datatable')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Product_' . date('YmdHis');
    }
}
