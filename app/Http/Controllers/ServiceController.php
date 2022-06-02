<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services(){
        // $services = App\Service::all();
        return view('serviceShop',compact('services'));
    }
}
