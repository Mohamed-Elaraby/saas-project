<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ExpensesTypeDataTable;
use App\Http\Controllers\Controller;
use App\Models\ExpensesType;
use Illuminate\Http\Request;

class ExpensesTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-expensesType')->only('index');
        $this->middleware('permission:create-expensesType')->only('create');
        $this->middleware('permission:update-expensesType')->only('edit');
        $this->middleware('permission:delete-expensesType')->only('destroy');
    }

    public function index(ExpensesTypeDatatable $expensesTypeDatatable)
    {
        return $expensesTypeDatatable ->render('admin.expensesTypes.index');
    }

    public function create()
    {
        return view('admin.expensesTypes.create');
    }

    public function store(Request $request)
    {

        ExpensesType::create($request->all());
        toast(__('trans.expenses type created successfully'),'success')->background('#000');
        return redirect()->route('admin.expensesTypes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $expensesType = ExpensesType::findOrFail($id);
        return view('admin.expensesTypes.edit', compact('expensesType'));
    }

    public function update(Request $request, $id)
    {
        ExpensesType::findOrFail($id)->update($request->all());
        toast(__('trans.expenses type updated successfully'),'success')->background('#000');
        return redirect()->route('admin.expensesTypes.index');
    }

    public function destroy($id)
    {
        ExpensesType::findOrFail($id)->delete();
        toast(__('trans.expenses type deleted successfully'),'error')->background('#000');
        return redirect()->route('admin.expensesTypes.index');
    }
}
