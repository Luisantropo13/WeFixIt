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

    public static function dashproduct(){
        $products = Product::all();
        return view('dashboard/dashproduct',compact('products'));
    }

    public static function productDelete($id){
        Product::productDelete($id);
        return redirect('/admin/product');
    }
}
