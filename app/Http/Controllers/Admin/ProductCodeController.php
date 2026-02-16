<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductCodeDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCode\AddProductCodeRequest;
use App\Http\Requests\ProductCode\UpdateProductCodeRequest;
use App\Models\ProductCode;
use Illuminate\Http\Request;

class ProductCodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-productCode')->only('index');
        $this->middleware('permission:create-productCode')->only('create');
        $this->middleware('permission:update-productCode')->only('edit');
        $this->middleware('permission:delete-productCode')->only('destroy');
    }

    public function index(ProductCodeDatatable $productCodeDatatable)
    {
        return $productCodeDatatable -> render('admin.productCodes.index');
    }

    public function create()
    {
        return view('admin.productCodes.create');
    }

    public function store(AddProductCodeRequest $request)
    {
        foreach ($request -> data as $data) {
            ProductCode::create($data);
        }
toast(__('trans.product code created successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.productCodes.index');
    }

    public function show($id)
    {
        $productCode = ProductCode::findOrFail($id);
        return view('admin.productCodes.show', compact('productCode'));
    }

    public function edit($id)
    {
        $productCode = ProductCode::findOrFail($id);
        return view('admin.productCodes.edit',compact('productCode'));
    }

    public function update(UpdateProductCodeRequest $request, $id)
    {
        $productCode = ProductCode::findOrFail($id);
        $productCode->update($request -> all());
        toast(__('trans.product code updated successfully'), 'success')->background('#000000');
        return redirect() -> route('admin.productCodes.index');
    }

    public function destroy($id)
    {
        ProductCode::findOrFail($id) -> delete();
        toast(__('trans.product code deleted successfully'), 'error')->background('#000000');
        return redirect()->back();
    }
}
