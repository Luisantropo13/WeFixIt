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


    public static function addClient($name,$email,$pass,$phone,$adress,$bornDate,$img){
        DB::insert("INSERT INTO clients (clientName, clientEmail, clientPass, clientPhone, clientAdress, clientBornDate, clientImg) 
                    VALUES ('$name', '$email', '$pass','$phone','$adress','$bornDate','$img')");
    }

    public static function modifyClient($id,$name,$email,$pass,$phone,$adress,$bornDate,$img){
        DB::update("UPDATE clients SET clientId='$id', clientName='$name', 
                                        clientEmail='$email', clientPass='$pass',
                                        clientPhone='$phone', clientAdress='$adress',
                                        clientBornDate='$bornDate', clientImg='$img' 
                                    WHERE clientId='$id'");
    }
}
