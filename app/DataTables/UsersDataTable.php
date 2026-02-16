<?php

namespace App\DataTables;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query){
                return view('admin.datatableHtmlBuilderRender.user.action', compact('query'));
            })
            ->editColumn('role', function ($query){
//                $roles = User::where('id', $query -> id)->get();
//                return count($query->roles);
                return $query -> roles[0] -> name;
            })

            ->editColumn('permissions', function ($query){
                return count($query->permissions);
            })

            ->filterColumn('role', function($query, $keyword) {
                $query->whereHas('roles', function ($q) use ($keyword){
                    $q->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->rawColumns(['action']);
    }

    public function query(User $model): QueryBuilder
    {

        return $model->newQuery();

    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
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
//                Button::make('excel'),
//                Button::make('csv'),
//                Button::make('pdf'),
//                Button::make('print'),
//                Button::make('reset'),
//                Button::make('reload'),
//                Column::make('action'),
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('#')->searchable(false),
            Column::make('name')->title(__('trans.username')),
            Column::make('email')->title(__('trans.email')),
            Column::make('role')->title(__('trans.role')),
            Column::make('permissions')->title(__('trans.permissions'))->searchable(false),
//            Column::make('team')->searchable(false),
//            Column::make('created_at'),
            Column::make('updated_at')->title(__('trans.last update')),
            Column::make('action')->title(__('trans.action')),
        ];
    }

    protected function filename(): string
    {
        return 'Users_'.date('YmdHis');
    }
}
