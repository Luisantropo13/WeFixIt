<?php
use Illuminate\Http\Request;

use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\BusinessController;
use App\HTTP\Controllers\ContactController;
use App\HTTP\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BillWorkerController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Validator;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Models\Client;

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


Route::get('/admin',function()
{
    return Validator::routerValidator( 
        view('dashboard') ,     // Ruta ir.
        redirect( "/" ),        // Si no cumple, ir aquí.
        Validator::$ADMIN
    );

})->name('dashboard');

//Login
Route::get('/login', function () {
    return view('login' , [ "login" => true ]);
})->name('login');

Route::get('/logout', function () {

    session_destroy( );
    return redirect('/');

})->name('logout');

Route::post('/clientRegister',function(Request $req)
{
        return LoginController::clientRegister($req);
});

Route::post('workerLogin',[LoginController::class,'workerLogin']);

//Dashboards parts

Route::get('/admin/client',function(){
    
    return Validator::routerValidator( 
        ContactController::dashclient() ,     // Ruta ir.
        redirect( "/" ),        // Si no cumple, ir aquí.
        Validator::$ADMIN
    );
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



//Cliente
Route::get('/client',function(){
    return ContactController::clientProfile();
})->name('client');


//Trabajador
Route::get('/workerBoard',function(){
    return view('shop/workerBoard');
})->name('workDash');

Route::get('/productLine',function(Request $req){
    return BillController::workerBillAdd($req);
})->name('productLine');


// Route::post('/productLineAdds',function(Request $req){
        
//     print_r( $_POST );

// })->name('productLineAdds');


Route::get('/billDashWork',function(){
    return BillWorkerController::dashbill();
})->name('dashbill2');

Route::get('/billDashWork/add',function(){
    return BillWorkerController::billFormAdd();
})->name('billFormAdd2');

Route::get('/billDashWork/delete',function(Request $req){
    $data = $req->input();
    return BillWorkerController::billDelete($data['billId']);
})->name('billFormDel2');

Route::post('/billDashWork/show',function(Request $req){
    return BillWorkerController::billAdd($req);
});

Route::get('/billDashWork/modread',function(Request $req){
    $bilmod = $req->input();
    return BillWorkerController::billModifyRead($bilmod['billId']);
})->name('modread');

Route::post('/billDashWork/modwrite',function(Request $req){
    return BillWorkerController::billModifyWrite($req);
})->name('modwrite');

//PDF

Route::get('productPdf', [PdfController::class, 'productPdf'])->name('ProductPdf');
Route::get('clientPdf', [PdfController::class, 'clientPdf'])->name('ClientPdf');
Route::get('workerPdf', [PdfController::class, 'workerPdf'])->name('WorkerPdf');
Route::get('billPdf', [PdfController::class, 'billPdf'])->name('BillPdf');
Route::get('reviewPdf', [PdfController::class, 'reviewPdf'])->name('ReviewPdf');
Route::get('companyPdf', [PdfController::class, 'companyPdf'])->name('CompanyPdf');

Route::post( "pagarlosmondongos" , function( Request $req )
{
    return BillController::keepBill( $req );
});

Route::post('factura',function(Request $req){
    return PdfController::factura($req);
})->name('  ');


//Mail

Route::post('contactMail',function(Request $req)
{
    $data = $req->input( );

    ContactMail::createMail( [
        'title'   =>  "Wefixit2 Contacto",
        'subject' => 'luiscabrerasantana@gmail.com', // A donde va.
        'name'    => $data[ "subject" ],
        'email'   => $data[ "email"],
        'content' => $data[ "content"],
        "view"    => 'PDF.correo'
    ]);


    return redirect( "contact" );
});