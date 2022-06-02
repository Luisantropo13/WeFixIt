<?php

use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\BusinessController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\ServiceController;
use App\HTTP\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'PageController@home');

Route::get('/', function () {
    return HomeController::items();
    return HomeController::services();
    return HomeController::businesses();
    return HomeController::reviews();
})->name('home');

// Route::get('/home', 'HomeController@home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return ProductController::items();
})->name('product');

Route::get('/service', function () {
    return view('serviceShop');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::get('/business/{name?}', 'BusinessController@business');

Route::get('/business', function () {
    [ProductController::class.'items'];
    return view('business');
})->name('business');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/admin',function(){
    return view('dashboard');
})->name('dashboard');


//Dashboards parts

Route::get('/admin/client',function(){
    return view('dashboard/dashclient');
})->name('dashclient');

Route::get('/admin/bill',function(){
    return view('dashboard/dashbill');
})->name('dashbill');

Route::get('/admin/company',function(){
    return view('dashboard/dashcompany');
})->name('dashcompnay');

Route::get('/admin/product',function(){
    return view('dashboard/dashproduct');
})->name('dashproduct');

Route::get('/admin/review',function(){
    return view('dashboard/dashreview');
})->name('dashreview');

Route::get('/admin/service',function(){
    return view('dashboard/dashservice');
})->name('dashservice');

Route::get('/admin/workers',function(){
    return view('dashboard/dashworkers');
})->name('dashworkers');

//Add info part

Route::get('/admin/addInfo',function(){
    return view('components/addinfo');
})->name('addinfo');

Route::get('/admin/addInfo/billAddInfo',function(){
    return view('formviews/billform');
})->name('billform');

Route::get('/admin/addInfo/clientAddInfo',function(){
    return view('formviews/clientform');
})->name('clientform');

Route::get('/admin/addInfo/companyAddInfo',function(){
    return view('formviews/companyform');
})->name('companyform');

Route::get('/admin/addInfo/productAddInfo',function(){
    return view('formviews/productform');
})->name('productform');

Route::get('/admin/addInfo/reviewAddInfo',function(){
    return view('formviews/reviewform');
})->name('reviewform');

Route::get('/admin/addInfo/serviceAddInfo',function(){
    return view('formviews/serviceform');
})->name('serviceform');

Route::get('/admin/addInfo/workerAddInfo',function(){
    return view('formviews/workerform');
})->name('workerform');