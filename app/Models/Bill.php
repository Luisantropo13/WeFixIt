<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bill extends Model
{
    use HasFactory;

    public static function billDelete($id){
        DB::delete("DELETE FROM bills WHERE billId = '$id'");
    }

    public static function getBillById($id){
        return DB::select("SELECT * FROM bills WHERE billId = '$id'")[0];
    }

    public static function addBill($date,$payment,$client){
        DB::insert("INSERT INTO bills (billDate, billPayment, clientId) 
                    VALUES ('$date', '$payment', '$client')");
    }

    public static function modifyBill($id,$date,$payment,$client){
        DB::update("UPDATE bills SET billId='$id', billDate='$date', 
                                        billPayment='$payment', clientId='$client' 
                                    WHERE billId='$id'");
    }
}
