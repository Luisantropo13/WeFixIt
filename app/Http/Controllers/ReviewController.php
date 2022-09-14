<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Client;
use App\Models\Bill;

class ReviewController extends Controller
{

    public static function dashreview(){
        $reviews = Review::joinReview();
        $clients = Client::all();
        return view('dashboard/dashreview',compact('reviews','clients'));
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
            "revmod" => Review::getReviewById($id),
            "clients" => Client::getAllClient(),
            "client" => Bill::billClient($id)
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

    public static function reviewFormAdd(){
        
        return view('formviews/reviewform', [
            "clients" => Client::getAllClient(),
        ]);
    }
}