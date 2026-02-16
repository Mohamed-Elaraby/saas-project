<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SubCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategory\AddAndUpdateSubCategoryRequest;
use App\Http\Requests\SubCategory\StoreSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-subCategory')->only('index');
        $this->middleware('permission:create-subCategory')->only('create');
        $this->middleware('permission:update-subCategory')->only('edit');
        $this->middleware('permission:delete-subCategory')->only('destroy');
    }

    public function index(SubCategoryDatatable $subCategoriesDatatable)
    {
        return $subCategoriesDatatable -> render('admin.subCategories.index');
    }

    public function create()
    {
        $main_categories = Category::all();
        return view('admin.subCategories.create', compact('main_categories'));
    }

    public function store(StoreSubCategoryRequest $request)
    {
        SubCategory::create($request -> all());
        toast(__('trans.sub category created successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.subCategories.index');
    }

    public function show($id)
    {
//        $category = SubCategory::findOrFail($id);
//        return view('admin.subCategories.show', compact('category'));
    }

    public function edit($id)
    {
        $subCategory = SubCategory::findOrFail($id);
        return view('admin.subCategories.edit',compact('subCategory'));
    }

    public function update(UpdateSubCategoryRequest $request, $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->update($request -> all());
        toast(__('trans.sub category updated successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.subCategories.index');
    }


    public function destroy($id)
    {
        SubCategory::findOrFail($id)->delete();
        toast(__('trans.sub category deleted successfully'), 'success')->background('#000000');
        return redirect()->back();
    }
}
