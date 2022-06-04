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

    public static function billModify($id){
        DB::select("SELECT FROM bills WHERE billId = '$id'");
    }
}
