<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\bankOperations\bankOperationsRequest;
use App\Models\Bank;
use App\Models\Branch;
use App\Traits\HelperTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    use HelperTrait;
    public function __construct()
    {
        $this->middleware('permission:read-bank')->only('index');
        $this->middleware('permission:create-bank')->only('operations');
        $this->middleware('permission:update-bank')->only('edit');
        $this->middleware('permission:delete-bank')->only('destroy');
    }

    public function operations($branch_id)
    {
        $branch = Branch::findOrFail($branch_id);
        return view('admin.bank.create', compact('branch'));
    }

    public function store(bankOperationsRequest $request)
    {
        $user_id = auth()->user()->id;

        $last_amount = Bank::where('branch_id', $request -> branch_id) -> get()->last(); // get last amount
        $final_amount = $last_amount ? $last_amount->final_amount : 0; // if last amount not empty set final amount else final amount equal zero


        if ($request->process_type == 'withDraw'){ // on withdrawn

            if ($final_amount == 0 || $final_amount < $request->amount_paid){ // on mount in bank is not enough redirect
                toast(__('trans.the amount in the bank is not enough'), 'error')->background('#000');
                $redirect = redirect()->back();

            }else { // on withdrawn money

                Bank::create([
                    'amount_paid'           => $request->amount_paid,
                    'final_amount'          => $final_amount - $request->amount_paid,
                    'money_process_type'    => 0,
                    'notes'                 => $request->notes,
                    'process_type'           => $request->process_type,
                    'user_id'               => $user_id,
                    'branch_id'             => $request->branch_id,
                ]);
                toast(__('trans.the amount has been withdrawn successfully'), 'success') ->background('#000');

                $redirect = redirect()->back();

            }
        }else{ // on deposited money

            $bank = Bank::create([
                'amount_paid'           => $request->amount_paid,
                'final_amount'          => $final_amount + $request->amount_paid,
                'money_process_type'    => 1,
                'notes'                 => $request->notes,
                'process_type'           => $request->process_type,
                'user_id'               => $user_id,
                'branch_id'             => $request->branch_id,
            ]);
            $amount_paid = $request->amount_paid;
            /* Record Transaction On Statement Table */
            $this -> insertToStatement(
                $bank, // relatedModel
                [
                    'custody_administration_network'        =>  $amount_paid,
                    'notes'                                 =>  $bank -> notes ? __('trans.financial custody from the administration') . ' ( ' . $bank -> notes. ' )' : __('trans.financial custody from the administration'),
                    'branch_id'                             =>  $request -> branch_id,
                ]
            );
            toast(__('trans.the amount has been deposited successfully'), 'success') ->background('#000');
            $redirect = redirect()->back();
        }

        return $redirect;
    }

}
