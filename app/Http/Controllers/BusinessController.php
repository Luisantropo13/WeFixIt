<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class BusinessController extends Controller
{
    public static function items(){
        $business = Company::all();
        return view('business',compact('business'));
    }
}
