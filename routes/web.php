<?php
use Illuminate\Http\Request;

use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\BusinessController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ReviewController;

use Illuminate\Support\Facades\Route;

session_start();

// Views
Route::get('/', function () {
    return HomeController::home();
})->name('home');

Route::get('/welcome', function () {
    return HomeController::welcome();
})->name('welcome');

Route::get('/product', function () {
    return ProductController::items();
})->name('product');

Route::get('/service', function () {
    return view('serviceShop');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/business', function () {
    return BusinessController::companies();
})->name('business');


Route::get('/admin',function(){
    return view('dashboard');
})->name('dashboard');

//Login
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('workerLogin',[LoginController::class,'workerLogin']);

Route::get('/logout',function(){
    if(session()->has('worker')){
        session()->pull('worker');
    }
   return redirect('home');
});

//Dashboards parts

Route::get('/admin/client',function(){
    return ContactController::dashclient();
})->name('dashclient');

Route::get('/admin/bill',function(){
    return BillController::dashbill();
})->name('dashbill');

Route::get('/admin/company',function(){
    return BusinessController::dashcompanies();
})->name('dashcompany');

Route::get('/admin/product',function(){
    return ProductController::dashproduct();
})->name('dashproduct');

Route::get('/admin/review',function(){
    return ReviewController::dashreview();
})->name('dashreview');

Route::get('/admin/service',function(){
    return view('dashboard/dashservice');
})->name('dashservice');

Route::get('/admin/workers',function(){
    return ContactController::dashworker();
})->name('dashworkers');

//This views show the formviews

Route::get('/admin/addInfo',function(){
    return view('components/addinfo');
})->name('addinfo');

Route::get('/admin/addInfo/billAddInfo',function(){
    echo "Me cago en toh";
    return BillController::billFormAdd();
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
    return ReviewController::reviewFormAdd();
})->name('reviewform');

Route::get('/admin/addInfo/serviceAddInfo',function(){
    return view('formviews/serviceform');
})->name('serviceform');

Route::get('/admin/addInfo/workerAddInfo',function(){
    return view('formviews/workerform');
})->name('workerform');

//POST
// Route::post('/addWorker',function(){
//     return DashboardController::addWorker($req);
// })->name('addWorker');

//DELETES
Route::get('admin/companyDelete',function(Request $req){
    $data = $req->input();
    return BusinessController::deleteController($data['companyId']);
});

Route::get('admin/clientDelete',function(Request $req){
    $data = $req->input();
    return ContactController::clientDelete($data['clientId']);
});

Route::get('admin/workerDelete',function(Request $req){
    $data = $req->input();
    return ContactController::workerDelete($data['workerId']);
});

Route::get('admin/productDelete',function(Request $req){
    $data = $req->input();
    return ProductController::productDelete($data['productId']);
});

Route::get('admin/reviewDelete',function(Request $req){
    $data = $req->input();
    return ReviewController::reviewDelete($data['reviewId']);
});

Route::get('admin/billDelete',function(Request $req){
    $data = $req->input();
    return BillController::billDelete($data['billId']);
});



//All this rutes really add info to de database
Route::post('admin/companyAdd',function(Request $req){
    return BusinessController::companyAdd($req);
});

Route::post('admin/billAdd',function(Request $req){
    return BillController::billAdd($req);
});

Route::post('admin/clientAdd',function(Request $req){
    return ContactController::clientAdd($req);
});

Route::post('admin/workerAdd',function(Request $req){
    return ContactController::workerAdd($req);
});

Route::post('admin/productAdd',function(Request $req){
    return ProductController::productAdd($req);
});

Route::post('admin/reviewAdd',function(Request $req){
    return ReviewController::reviewAdd($req);
});


//ModifyRead
Route::get('/admin/companymod',function(Request $req){
    $busmod = $req->input();
    return BusinessController::companyModifyRead($busmod['companyId']);
})->name('companymod');

Route::get('/admin/billmod',function(Request $req){
    $bilmod = $req->input();
    return BillController::billModifyRead($bilmod['billId']);
})->name('billmod');

Route::get('/admin/clientmod',function(Request $req){
    $climod = $req->input();
    return ContactController::clientModifyRead($climod['clientId']);
})->name('clientmod');

Route::get('/admin/workermod',function(Request $req){
    $wormod = $req->input();
    return ContactController::workerModifyRead($wormod['workerId']);
})->name('workermod');

Route::get('/admin/productmod',function(Request $req){
    $promod = $req->input();
    return ProductController::productModifyRead($promod['productId']);
})->name('productmod');

Route::get('/admin/reviewmod',function(Request $req){
    $revmod = $req->input();
    return ReviewController::reviewModifyRead($revmod['reviewId']);
})->name('reviewmod');

//Modify
Route::post('/admin/companymodadd',function(Request $req){
    return BusinessController::companyModifyWrite($req);
})->name('companymodwrite');

Route::post('/admin/billmodadd',function(Request $req){
    return BillController::billModifyWrite($req);
})->name('billmodwrite');

Route::post('/admin/clientmodadd',function(Request $req){
    return ContactController::clientModifyWrite($req);
})->name('clientmodwrite');

Route::post('/admin/workermodadd',function(Request $req){
    return ContactController::workerModifyWrite($req);
})->name('workermodwrite');

Route::post('/admin/productmodadd',function(Request $req){
    return ProductController::productModifyWrite($req);
})->name('productmodwrite');

Route::post('/admin/reviewmodadd',function(Request $req){
    return ReviewController::reviewModifyWrite($req);
})->name('reviewmodwrite');