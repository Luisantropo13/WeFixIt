<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;
use App\Models\Review;

class HomeController extends Controller
{
    public static function home()
    {
        $items = Product::all();
        $business = Company::all();  
        $reviews = Review::all();
        return view('home',compact('items','business','reviews'));
    }

    public static function welcome()
    {
        $items = Product::all();
        $business = Company::all();  
        $reviews = Review::all();
        return view('welcome',compact('items','business','reviews'));
    }
    
}
