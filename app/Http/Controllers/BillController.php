<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;

class BillController extends Controller
{
    public static function dashbill(){
        $bills = Bill::all();
        return view('dashboard/dashbill',compact('bills'));
    }

    public static function billDelete($id){
        Bill::billDelete($id);
        return redirect('/admin/bill');
    }

    public static function billAdd(Request $req)
    {
        $data = $req->input();
        Bill::addBill(
            $data['billDate'],
            $data['billPayment'],
            $data['clientId']
        );
        return redirect('/admin/bill');
    }

    public static function billModifyRead($id)
    {
        return view('formodify/billmod', [
            "bilmod" => Bill::getBillById($id)
        ]);
    }

    public static function billModifyWrite(Request $req)
    {
        $data = $req->input();
        Bill::modifyBill(
            $data['billId'],
            $data['billDate'],
            $data['billPayment'],
            $data['clientId']
        );
        return redirect('/admin/bill');
    }
}
