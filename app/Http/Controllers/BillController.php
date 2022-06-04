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
}
