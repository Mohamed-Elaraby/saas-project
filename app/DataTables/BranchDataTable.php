<?php

namespace App\DataTables;

use App\Models\Bank;
use App\Models\Branch;
use App\Models\MoneySafe;
use App\Traits\SettingTrait;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class BranchDataTable extends DataTable
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
                return view('admin.datatableHtmlBuilderRender.branch.action', compact('query'));
            })
            ->editColumn('status', function ($query){
                if ($query->status == 'open') {
                    return '<span class="bg-green">'.$query->status.'</span>';
                }else{
                    return '<span class="bg-danger">'.$query->status.'</span>';
                }
            })
            ->addColumn('moneySafe', function ($query){
                $moneySafe = MoneySafe::where('branch_id', $query -> id)->select('final_amount', 'branch_id')->orderBy('id', 'desc')->first();
                $current_currency = SettingTrait::getSetting()->currency;
                $button_text = $moneySafe ? number_format($moneySafe ->final_amount, 0, 2) . ' ' . $current_currency : '00.00 '. $current_currency ;
                return  '<a href="'. route('admin.moneySafe.operations', $query -> id) .'">'. $button_text .'</a>';
            })
            ->addColumn('bank', function ($query){
                $bank = Bank::where('branch_id', $query -> id)->select('final_amount', 'branch_id')->orderBy('id', 'desc')->first();
                $current_currency = SettingTrait::getSetting()->currency;
                $button_text = $bank ? number_format($bank ->final_amount, 0, 2) . ' ' . $current_currency : '00.00 '. $current_currency ;
                return  '<a href="'. route('admin.bank.operations', $query -> id) .'">'. $button_text .'</a>';

            })
            ->editColumn('name', function ($query){
                return 'DashBoard For Branch';
//                return "<a href='".route('dashboard', ['branch_id' => $query->id])."'>".$query -> name."</a>";
            })
            ->rawColumns(['action', 'status', 'name', 'moneySafe', 'bank']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Branch $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('branch-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->processing(true)
                    ->serverSide(true)
                    ->scrollX(false)
                    ->scrollY(false)
                    ->searching(true)
                    ->responsive(true)
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
            Column::make('DT_RowIndex')     -> title('#') ->searchable(false),
            Column::make('name')            -> title( __('trans.branch name') ),
            Column::make('display_name')    -> title( __('trans.display name') ),
            Column::make('phone')           -> title( __('trans.phone') ),
            Column::make('vat_number')      -> title( __('trans.vat number') ),
            Column::make('status')          -> title( __('trans.status') ),
            Column::make('moneySafe')       -> title( __('trans.money safe') ),
            Column::make('bank')            -> title( __('trans.bank') ),
            Column::make('updated_at')      -> title( __('trans.last update') )
                ->addClass('date_dir_setting'),
            Column::make('action')          -> title( __('trans.action') )
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Branch_' . date('YmdHis');
    }
}
