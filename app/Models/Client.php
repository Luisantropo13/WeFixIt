<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Client extends Model
{
    use HasFactory;

    public static function clientDelete($id){
        DB::delete("DELETE FROM clients WHERE clientId = '$id'");
    }

    public static function getClientById($id){
        return DB::select("SELECT * FROM clients WHERE clientId = '$id'")[0];
    }

    public static function getAllClient(){
        return DB::select("SELECT * FROM clients");
    }


    public static function addClient($name,$email,$pass,$phone,$adress,$bornDate){
        DB::insert("INSERT INTO clients (clientName, clientEmail, clientPass, clientPhone, clientAdress, clientBornDate) 
                    VALUES ('$name', '$email', '$pass','$phone','$adress','$bornDate')");
    }

    public static function modifyClient($id,$name,$email,$pass,$phone,$adress,$bornDate){
        DB::update("UPDATE clients SET clientId='$id', clientName='$name', 
                                        clientEmail='$email', clientPass='$pass',
                                        clientPhone='$phone', clientAdress='$adress',
                                        clientBornDate='$bornDate' 
                                    WHERE clientId='$id'");
    }

    public static function clientProfileById($id){
        return DB::select("SELECT * FROM bills
                            inner join clients on bills.clientId = clients.clientId    
                            WHERE clients.clientId = $id; 
        ");
    }

    public static function existsUserByEmail( $clientEmail ) 
    {
        $log = DB::select("SELECT * FROM clients WHERE clientEmail='$clientEmail' ");
        
        return (count($log)>0);
    }

    public static function islogin($clientEmail,$clientPass){
        $log = DB::select("SELECT * FROM clients 
        WHERE clientEmail='$clientEmail' 
        AND clientPass='$clientPass'");
        


        if(count($log)>0)
        {
            return [
                'id'=> $log[0]->clientId,
                'nombre'=> $log[0]->clientName,
                'email'=>$log[0]->clientEmail,
                'phone' => $log[0]->clientPhone,
                'address' => $log[0]->clientAdress,
                'birthday' => $log[0]->clientBornDate,
                'rol'=>'client'
            ];
        };
        return null;
    }
}