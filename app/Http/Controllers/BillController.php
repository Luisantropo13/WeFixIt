<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Client;
use App\Models\Product;


class BillController extends Controller
{
    public static function dashbill(){
        $bills = Bill::joinBill();
        $clients = Client::all();
        return view('dashboard/dashbill',compact('bills','clients'));
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
        
        return view('formviews/billform', [
            "clients" => Client::getAllClient(),
        ]);
    }
    

    public static function keepBill( Request $req ) 
    {
        $data = $req->input();
         Bill::addBill( $data[ "billDate"], $data[ "billPayment" ] , $data[ "clientId" ] );

         return redirect( "workerBoard" );
    }

    public static function workerBillAdd(Request $req)
    {
        return view('shop/producLineBoard',[ "clients" => Bill::joinBill()], [ "products" => Product::getAllProducts()] );

        $data = $req->input();
        Bill::addBill(
            $data['billDate'],
            $data['billPayment'],
            $data['clientId']
        );
         
    }
}
