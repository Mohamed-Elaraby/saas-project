<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-product')->only('index');
        $this->middleware('permission:create-product')->only('create');
        $this->middleware('permission:update-product')->only('edit');
        $this->middleware('permission:delete-product')->only('destroy');
    }

    public function index(ProductDatatable $productDatatable)
    {
        return $productDatatable -> render('admin.products.index');
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        Product::create($request -> all());
        toast(__('trans.product created successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.products.index');
    }

    public function show($id)
    {
//        $product = Product::findOrFail($id);
//        return view('admin.products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request -> all());
        toast(__('trans.product updated successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.products.index');
    }

    public function destroy($id)
    {
        Product::findOrFail($id) -> delete();
        toast(__('trans.product deleted successfully'), 'error')->background('#000000');
        return redirect()->back();
    }
}
