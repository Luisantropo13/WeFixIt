<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public static function productDelete($id){
        DB::delete("DELETE FROM products WHERE productId = '$id'");
    }

    public static function getProductById($id){
        return DB::select("SELECT * FROM products WHERE productId = '$id'")[0];
    }

    public static function addProduct($model,$brand,$price,$status,$category,$description,$stock,$img){
        DB::insert("INSERT INTO products (productModel, productBrand, productPrice, productStatus, productCategory, productDescription, productStock, productImg) 
                    VALUES ('$model', '$brand', '$price','$status','$category','$description','$stock','$img')");
    }

    public static function modifyProduct($id,$model,$brand,$price,$status,$category,$description,$stock,$img){
        DB::update("UPDATE products SET productId='$id', productModel='$model', 
                                        productBrand='$brand', productPrice='$price',
                                        productStatus='$status', productCategory='$category',
                                        productDescription='$description', productStock='$stock',
                                        productImg='$img' 
                                    WHERE productId='$id'");
    }
}
