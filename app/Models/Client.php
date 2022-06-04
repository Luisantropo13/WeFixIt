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

    public static function clientModify($id){
        DB::select("SELECT FROM clients WHERE clientId = '$id'");
    }
}
