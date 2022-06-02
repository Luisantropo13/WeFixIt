<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public static function items(){
        $items = Product::all();
        return view('itemShop',compact('items'));
    }
}
