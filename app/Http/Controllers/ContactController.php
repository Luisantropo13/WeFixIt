<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Worker;

class ContactController extends Controller
{
    public static function dashclient(){
        $clients = Client::all();
        return view('dashboard/dashclient',compact('clients'));
    }

    public static function dashworker(){
        $workers = Worker::all();
        return view('dashboard/dashworkers',compact('workers'));
    }

    public static function clientDelete($id){
        Client::clientDelete($id);
        return redirect('/admin/client');
    }

    public static function workerDelete($id){
        Worker::workerDelete($id);
        return redirect('/admin/worker');
    }
}
