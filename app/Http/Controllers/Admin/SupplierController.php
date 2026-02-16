<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SupplierDataTable;
use App\DataTables\SupplierTransactionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\AddAndUpdateSupplierRequest;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-supplier')->only('index');
        $this->middleware('permission:create-supplier')->only('create');
        $this->middleware('permission:update-supplier')->only('edit');
        $this->middleware('permission:delete-supplier')->only('destroy');
    }

    public function index(SupplierDatatable $supplierDatatable,Request $request)
    {
        $monthName = '';
        if ($request -> month){
            $monthName = Carbon::now()->monthName;
        }
        return $supplierDatatable -> render('admin.suppliers.index', compact('monthName'));
    }

    public function create()
    {
        return view('admin.suppliers.create');
    }

    public function store(AddAndUpdateSupplierRequest $request)
    {
        Supplier::create($request -> all());
        toast(__('trans.supplier created successfully'), 'success')->background('#000');
        return redirect() -> route('admin.suppliers.index');
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.show', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.edit',compact('supplier'));
    }

    public function update(AddAndUpdateSupplierRequest $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request -> all());
        toast(__('trans.supplier updated successfully'), 'success')->background('#000');
        return redirect() -> route('admin.suppliers.index');
    }


    public function destroy($id)
    {
        Supplier::findOrFail($id) -> delete();
        toast(__('trans.supplier deleted successfully'), 'error')->background('#000');
        return redirect()->back();
    }

    public function supplierTransactions($supplier_id, SupplierTransactionDatatable $supplierTransactionDatatable,Request $request)
    {
//        dd($request -> supplier_id);
        // show supplier transactions Page
        $supplier = Supplier::findOrFail($supplier_id);
//        $transactions = SupplierTransaction::where('supplier_id', $supplier_id)->orderByDesc('id')->paginate(5);
        return $supplierTransactionDatatable -> render('admin.suppliers.transactions', compact('supplier'));
    }
}
