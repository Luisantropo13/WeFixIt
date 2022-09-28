<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Client;

class BillWorkerController extends Controller
{
    public static function dashbill(){
        $bills = Bill::joinBill();
        $clients = Client::all();
        return view('dashboard/dashbill2',compact('bills','clients'));
    }

    public static function billDelete($id){
        Bill::billDelete($id);
        return redirect('/billDashWork');
    }

    public static function billAdd(Request $req)
    {
        $data = $req->input();
        Bill::addBill(
            $data['billDate'],
            $data['billPayment'],
            $data['clientId']
        );
        return redirect('/billDashWork');
    }

    public static function billModifyRead($id)
    {
        return view('formodify/billmod2', [
            "bilmod" => Bill::getBillById($id),
            "clients" => Client::getAllClient(),
            "client" => Bill::billClient($id)
        ]);
    }

    public static function billModifyWrite(Request $req)
    {
        $data = $req->input();
        // print_r($data);exit();
        Bill::modifyBill(
            $data['billId'],
            $data['billDate'],
            $data['billPayment'],
            $data['clientId']
        );
        return redirect('/billDashWork');
    }

    public static function billFormAdd(){
        
        return view('formviews/billform2', [
            "clients" => Client::getAllClient(),
        ]);
    }
}
