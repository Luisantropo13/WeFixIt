<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{

    public static function dashreview(){
        $reviews = Review::all();
        return view('dashboard/dashreview',compact('reviews'));
    }

    public static function reviewDelete($id){
        Review::reviewDelete($id);
        return redirect('/admin/review');
    }

    public static function reviewAdd(Request $req)
    {
        $data = $req->input();
        Review::addReview(
            $data['reviewDate'],
            $data['reviewContent'],
            $data['clientId']
        );
        return redirect('/admin/review');
    }

    public static function reviewModifyRead($id)
    {
        return view('formodify/reviewmod', [
            "revmod" => Review::getReviewById($id)
        ]);
    }

    public static function reviewModifyWrite(Request $req)
    {
        $data = $req->input();
        Review::modifyReview(
            $data['reviewId'],
            $data['reviewDate'],
            $data['reviewContent'],
            $data['clientId']
        );
        return redirect('/admin/review');
    }
}