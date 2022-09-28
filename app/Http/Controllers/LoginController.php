<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use App\Models\Client;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{

    public static function getSession( ) 
    {
        if( !isset( $_SESSION[ "user" ] ) )
            return 0;

                switch($_SESSION[ "user" ] [ "rol" ] ) 
                {
//                  Rol ES CLIENTE.
                    case "client":  return 1;
//                  Rol es ADMIN.
                    case "Admin":   return 3;
//                  Rol NO ADMIN.
                    default:        return 2;
                }
        

       return 0;
    }
    public static function workerLogin(Request $req)
    {
        $data = $req->input();
        $info = Client::islogin($data['workerEmail'], $data['workerPass']);

            if( $info == null )
                $info = Worker::islogin($data['workerEmail'], $data['workerPass'] );


        if( $info != null ) // No existe.
        {
                LoginController::createSession($info);

                switch( $info[ "rol" ]) 
                {
//                  Rol ES CLIENTE.
                    case "client":  return redirect('client');
//                  Rol es ADMIN.
                    case "Admin":   return redirect('admin');
//                  Rol NO ADMIN.
                    default:        return redirect('workerBoard');
                }
        }

        return redirect('login');
    }

    public static function createSession($info){
        $_SESSION["user"] = $info;
    }

    public static function clientRegister(Request $req)
    {
        $data = $req->input();

        if( Client::existsUserByEmail( $data[ "clientEmail"] ) )
        {
  
            return view('login' , [ "login" => false]);
        }else
        {
                Client::addClient(
                    $data['clientName'],
                    $data['clientEmail'],
                    $data['clientPass'],
                    $data['clientPhone'],
                    $data['clientAdress'],
                    $data['clientBornDate']
                );
        }


        return view('login' , [ "login" => true ]);
    }
}
