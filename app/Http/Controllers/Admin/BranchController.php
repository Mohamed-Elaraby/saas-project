<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BranchDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\branch\AddAndUpdateBranchRequest;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-branch')->only('index');
        $this->middleware('permission:create-branch')->only('create');
        $this->middleware('permission:update-branch')->only('edit');
        $this->middleware('permission:delete-branch')->only('destroy');
    }

    public function index(BranchDatatable $branchDatatable)
    {
        return $branchDatatable -> render('admin.branches.index');
    }

    public function create()
    {
        return view('admin.branches.create');
    }

    public function store(AddAndUpdateBranchRequest $request)
    {
        Branch::create($request -> all());
        toast(__('trans.branch created successfully'),'success')->background('#000');
        return redirect() -> route('admin.branches.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        return view('admin.branches.edit',compact('branch'));
    }

    public function update(AddAndUpdateBranchRequest $request, $id)
    {
        $branch = Branch::findOrFail($id);
        $branch->update($request -> all());
        toast(__('trans.branch updated successfully'),'success')->background('#000');
        return redirect() -> route('admin.branches.index');
    }


    public function destroy($id)
    {
        Branch::findOrFail($id) -> delete();
        toast(__('trans.branch deleted successfully'),'error')->background('#000');
        return redirect()->back();
    }
}
