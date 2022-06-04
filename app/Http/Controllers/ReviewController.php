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
}