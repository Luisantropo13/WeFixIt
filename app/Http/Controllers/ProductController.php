<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public static function items()
    {
        $items = Product::all();
        return view('itemShop', [
            "items" =>  Product::getAllProducts()
        ]
        );
    }

    public static function dashproduct()
    {
        $products = Product::all();
        return view('dashboard/dashproduct', compact('products'));
    }

    public static function productDelete($id)
    {
        Product::productDelete($id);
        return redirect('/admin/product');
    }

    public static function productAdd(Request $req)
    {
        $data = $req->input();

        Product::addProduct(
            $data['productModel'],
            $data['productBrand'],
            $data['productPrice'],
            $data['productStatus'],
            $data['productCategory'],
            $data['productDescription'],
            $data['productStock'],
            Product::addImage( ProductController::addImagen($req->file( "productImg" ) ) )
        );

        return redirect('/admin/product');
    }

    public static function productModifyRead($id)
    {
        return view('formodify/productmod', [
            "promod" => Product::getProductById($id)
        ]);
    }

    public static function productModifyWrite(Request $req)
    {
 
        $data = $req->input();
        Product::modifyProduct(
            $data['productId'],
            $data['productModel'],
            $data['productBrand'],
            $data['productPrice'],
            $data['productStatus'],
            $data['productCategory'],
            $data['productDescription'],
            $data['productStock'],
            Product::addImage( ProductController::addImagen($req->file( "productImg" ) ) )
        );
        return redirect('/admin/product');
    }

    public static function addImagen($imagen)
    {
        $newFileName = md5(time()) . '.' . $imagen->extension();
        $imagen->move('media/uploaded_files/',$newFileName);
        
  
        return $newFileName;
    }
}
