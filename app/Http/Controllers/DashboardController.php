<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function addWorker(Request $req){
        return $req->all();

        
    }
}
