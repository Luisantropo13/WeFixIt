<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    public static function reviewDelete($id){
        DB::delete("DELETE FROM reviews WHERE reviewId = '$id'");
    }

    public static function reviewModify($id){
        DB::select("SELECT FROM reviews WHERE reviewId = '$id'");
    }
}
