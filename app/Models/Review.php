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

    public static function getReviewById($id){
        return DB::select("SELECT * FROM reviews WHERE reviewId = '$id'")[0];
    }

    public static function addReview($date,$content,$client){
        DB::insert("INSERT INTO reviews (reviewDate, reviewContent, clientId) 
                    VALUES ('$date', '$content', '$client')");
    }

    public static function modifyReview($id,$date,$content,$client){
        DB::update("UPDATE reviews SET reviewId='$id', reviewDate='$date', 
                                        reviewContent='$content', clientId='$client' 
                                    WHERE reviewId='$id'");
    }
}
