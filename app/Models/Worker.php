<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Worker extends Model
{
    use HasFactory;

    public static function islogin($workerEmail,$workerPass){
        
        return count( DB::select("SELECT workerEmail,workerPass FROM workers 
                                                                WHERE workerEmail='$workerEmail' 
                                                                AND workerPass='$workerPass'"))>0;
    }

    public static function workerDelete($id){
        DB::delete("DELETE FROM workers WHERE workerId = '$id'");
    }

    
    public static function getWorkerById($id){
        return DB::select("SELECT * FROM workers WHERE workerId = '$id'")[0];
    }

    public static function addWorker($name,$email,$pass,$phone,$adress,$bornDate,$place,$img){
        DB::insert("INSERT INTO workers (workerName, workerEmail, workerPass, workerPhone, workerAdress, workerBornDate, workerPlace, workerPhoto) 
                    VALUES ('$name', '$email', '$pass','$phone','$adress','$bornDate','$place','$img')");
    }

    public static function modifyWorker($id,$name,$email,$pass,$phone,$adress,$bornDate,$place,$img){
        DB::update("UPDATE workers SET workerId='$id', workerName='$name', 
                                        workerEmail='$email', workerPass='$pass',
                                        workerPhone='$phone', workerAdress='$adress',
                                        workerBornDate='$bornDate',workerPlace='$place',
                                        workerPhoto='$img' 
                                    WHERE workerId='$id'");
    }
}
