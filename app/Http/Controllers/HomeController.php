<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;
use App\Models\Service;
use App\Models\Review;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public static function items(){
        $items = Product::all();
        return view('home',compact('items'));
    }

    public static function services(){
        $services = Service::all();
        return view('home',compact('services'));
    }

    public static function businesses(){
        $business = Company::all();
        return view('home',compact('business'));
    }

    public static function reviews(){
        $reviews = Review::all();
        return view('home',compact('reviews'));
    }
}
