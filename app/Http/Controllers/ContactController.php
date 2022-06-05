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

    public static function clientAdd(Request $req)
    {
        $data = $req->input();
        Client::addClient(
            $data['clientName'],
            $data['clientEmail'],
            $data['clientPass'],
            $data['clientPhone'],
            $data['clientAdress'],
            $data['clientBornDate'],
            $data['clientImg']
        );
        return redirect('/admin/client');
    }

    public static function workerAdd(Request $req)
    {
        $data = $req->input();
        Worker::addWorker(
            $data['workerName'],
            $data['workerEmail'],
            $data['workerPass'],
            $data['workerPhone'],
            $data['workerAdress'],
            $data['workerBornDate'],
            $data['workerPlace'],
            $data['workerPhoto']
        );
        return redirect('/admin/worker');
    }

    public static function clientModifyRead($id)
    {
        return view('formodify/clientmod', [
            "climod" => Client::getClientById($id)
        ]);
    }

    public static function workerModifyRead($id)
    {
        return view('formodify/workermod', [
            "wormod" => Worker::getWorkerById($id)
        ]);
    }

    public static function clientModifyWrite(Request $req)
    {
        $data = $req->input();
        Client::modifyClient(
            $data['clientId'],
            $data['clientName'],
            $data['clientEmail'],
            $data['clientPass'],
            $data['clientPhone'],
            $data['clientAdress'],
            $data['clientBornDate'],
            $data['clientImg']
        );
        return redirect('/admin/client');
    }

    public static function workerModifyWrite(Request $req)
    {
        $data = $req->input();
        Worker::modifyWorker(
            $data['workerId'],
            $data['workerName'],
            $data['workerEmail'],
            $data['workerPass'],
            $data['workerPhone'],
            $data['workerAdress'],
            $data['workerBornDate'],
            $data['workerPlace'],
            $data['workerPhoto']
        );
        return redirect('/admin/worker');
    }
}
