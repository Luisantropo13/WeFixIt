<?php
use Illuminate\Http\Request;

use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\BusinessController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\ServiceController;
use App\HTTP\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

// Views
Route::get('/', function () {
    return HomeController::home();
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

//POST
// Route::post('/addWorker',function(){
//     return DashboardController::addWorker($req);
// })->name('addWorker');


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