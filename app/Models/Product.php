<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public static function productDelete($id){
        DB::delete("DELETE FROM products WHERE productId = '$id'");
    }

    public static function productModify($id){
        DB::select("SELECT FROM products WHERE productId = '$id'");
    }
}
