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

    public static function workerModify($id){
        DB::select("SELECT FROM workers WHERE workerId = '$id'");
    }
}
