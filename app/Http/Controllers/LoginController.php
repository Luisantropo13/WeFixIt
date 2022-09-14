<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public static function workerLogin(Request $req)
    {
        $data = $req->input();
        if (Worker::islogin($data['workerEmail'], $data['workerPass'])) {
            // $req->session()->put('workerEmail', $data['workerEmail']);
            // return view('dashboard',['session'=>$data['workerEmail']]);

            $_SESSION["user"] = "1";
            return view('dashboard',['session'=>$data['workerEmail']]);
        }else{
            return redirect('login');
        }
    }
}
