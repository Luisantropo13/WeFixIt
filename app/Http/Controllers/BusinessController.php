<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class BusinessController extends Controller
{
    public static function companies(){
        $business = Company::all();
        return view('business',compact('business'));
    }

    public static function dashcompanies(){
        $business = Company::all();
        return view('dashboard/dashcompany',compact('business'));
    }

    public static function deleteController($id){
        Company::deleteCompany($id);
        return redirect('/admin/company');
    }
}
