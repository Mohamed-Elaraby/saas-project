<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\AddAndUpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-category')->only('index');
        $this->middleware('permission:create-category')->only('create');
        $this->middleware('permission:update-category')->only('edit');
        $this->middleware('permission:delete-category')->only('destroy');
    }

    public function index(CategoryDatatable $categoryDatatable)
    {
        return $categoryDatatable -> render('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(AddAndUpdateCategoryRequest $request)
    {
        Category::create($request -> all());
        toast(__('trans.category created successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.categories.index');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function update(AddAndUpdateCategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request -> all());
        toast(__('trans.category updated successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.categories.index');
    }

    public function destroy($id)
    {
        Category::findOrFail($id) -> delete();
        toast(__('trans.category deleted successfully'), 'error')->background('#000000');
        return redirect()->back();
    }
}
