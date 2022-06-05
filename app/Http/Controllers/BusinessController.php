<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class BusinessController extends Controller
{
    public static function companies()
    {
        $business = Company::all();
        return view('business', compact('business'));
    }

    public static function dashcompanies()
    {
        $business = Company::all();
        return view('dashboard/dashcompany', compact('business'));
    }

    public static function deleteController($id)
    {
        Company::deleteCompany($id);
        return redirect('/admin/company');
    }

    public static function companyAdd(Request $req)
    {
        $data = $req->input();
        Company::addCompany(
            $data['companyName'],
            $data['companyAdress'],
            $data['companyPhone'],
            $data['companyWeb'],
            $data['companyDescription'],
            $data['companyLogo']
        );
        return redirect('/admin/company');
    }

    public static function companyModifyRead($id)
    {
        return view('formodify/companymod', [
            "busmod" => Company::getCompanyById($id)
        ]);
    }

    public static function companyModifyWrite(Request $req)
    {
        $data = $req->input();
        Company::modifyCompany(
            $data['companyId'],
            $data['companyName'],
            $data['companyAdress'],
            $data['companyPhone'],
            $data['companyWeb'],
            $data['companyDescription'],
            $data['companyLogo']
        );
        return redirect('/admin/company');
    }
}
