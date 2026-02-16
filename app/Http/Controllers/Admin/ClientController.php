<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClientTransaction;
use niklasravnsborg\LaravelPdf\Facades\Pdf;
use App\DataTables\ClientDataTable;
use App\DataTables\ClientTransactionDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\client\AddClientRequest;
use App\Http\Requests\client\UpdateClientRequest;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:read-client')->only('index');
        $this->middleware('permission:create-client')->only('create');
        $this->middleware('permission:update-client')->only('edit');
        $this->middleware('permission:delete-client')->only('destroy');
    }

    public function index(ClientDatatable $clientDatatable,Request $request)
    {
        $monthName = '';
        if ($request -> month){
            $monthName = Carbon::now()->monthName;
        }
        return $clientDatatable -> render('admin.clients.index', compact('monthName'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(AddClientRequest $request)
    {
//        dd($request ->all());
        Client::create($request -> except('other_car_status'));
        toast(__('trans.client created successfully'),'success')->background('#000');
        return redirect() -> route('admin.clients.index');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.show', compact('client'));
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.clients.edit',compact('client'));
    }

    public function update(UpdateClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request -> all());
        toast(__('trans.client updated successfully'),'success')->background('#000');
        return redirect() -> route('admin.clients.index');
    }


    public function destroy($id)
    {
        Client::findOrFail($id) -> delete();
        toast(__('trans.client deleted successfully'),'error')->background('#000');
        return redirect()->back();
    }

    public function clientTransactions($client_id, ClientTransactionDatatable $clientTransactionDatatable,Request $request)
    {
//        dd($request -> client_id);
        // show client transactions Page
        $client = Client::findOrFail($client_id);
        $momo = ['mo', 'kh'];
//        $transactions = ClientTransaction::where('client_id', $client_id)->orderByDesc('id')->paginate(5);
        return $clientTransactionDatatable -> render('admin.clients.transactions', compact('client', 'momo'));
    }

    public function clientTransactionsPrint(Request $request)
    {
//        dd($request -> start_date, $request -> end_date, $request -> search);
        $clientId = $request -> client_id;
        $data['client_transaction'] = ClientTransaction::where('client_id', $clientId)->get();
        $data['client'] = Client::findOrFail($clientId);
        $data['start_date'] = $request -> start_date;
        $data['end_date'] = $request -> end_date;
        $data['search'] = $request -> search;

        $mpdf = PDF::loadView('admin.clients.transactions_print', $data, [], [
            'margin_top' => 60,
            'margin_header' => 5,
            'margin_footer' => 5,

        ]);
        $mpdf->autoScriptToLang = true;
        $mpdf->autoArabic = true;
        $mpdf->autoLangToFont = true;
        $mpdf->showImageErrors = true;
        $mpdf->setAutoBottomMargin = true;
//         $mpdf->download($data['sale_order']->invoice_number.'.pdf');
//        if ($request->download)
//        {
//            return $mpdf->download($data['sale_order']->invoice_number.'.pdf');
//
//        }
        return $mpdf->stream($data['client']->name.'.pdf');
    }

    public function get_all_clients_by_ajax(Request $request)
    {
//        dd($request -> all());
        $clients = Client::pluck('name', 'id');
//        $clients = Client::where('name', 'like', '%'.$request -> search.'%')->get();
//        $response = [];
//        foreach ($clients as $client)
//        {
//            $response [] = [
//                'id' => $client -> id,
//                'text' => $client -> name,
//            ];
//        }
//        echo json_encode($response);
//        exit;
        return response() -> json(['clients' => $clients], 200);
    }
}
