<?php

use App\Http\Controllers\demoControler;
use App\Http\Controllers\forSession;
use App\Http\Controllers\siteController;
use App\Http\Middleware\TestMiddleware;

use GuzzleHttp\Middleware;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('firstRoute', [demoControler::class,'test1']);
Route::post('/sndRoute', [demoControler::class,'test2']);
Route::get("thrdRoute", [demoControler::class,'test3']);

Route::get("student/{name}/{roll}/{city}", [demoControler::class,'reqFunction']);
Route::get("input", [demoControler::class,'inputFunction']);
Route::get("header/{id}", [demoControler::class,'headerFunction']);
Route::get("invoice/{id}/item/{itemName}", [demoControler::class,'invoiceFunction']);
Route::get("invoices/", [demoControler::class,'allInvoices']);
// Route::get("countries/", [demoControler::class,'allCountries']);
Route::match(['get','post'],"countries/", [demoControler::class,'allCountries']);
Route::match(['get','post'],"contact/", [demoControler::class,'contact']);
Route::match(['get','post'],"upload/", [demoControler::class,'fileUpload']);
Route::match(['get','post'],"cook/", [demoControler::class,'cookeReq']);
Route::match(['get','post'],"jreq/", [demoControler::class,'jResp'])->Middleware([TestMiddleware::class]);
Route::match(['get','post'],"fileBinary/", [demoControler::class,'fileBinary']);
Route::match(['get','post'],"fileDownload/", [demoControler::class,'fileDownload']);


Route::get("home/", [siteController::class,'homePage'])->name('home');
Route::get("about/", [siteController::class,'aboutPage'])->name('about');
Route::get("courses/", [siteController::class,'coursesPage'])->name('courses');
Route::get("signin/", [siteController::class,'signinPage']);
Route::get("signup/", [siteController::class,'signupPage']);
Route::get("header/", [siteController::class,'layputHeaderPage']);
Route::get("footer/", [siteController::class,'layoutFooterPage']);
Route::get("contact/", [siteController::class,'contactPage'])->name('contact');

Route::get('main/', function () {
    return view(view: 'layout.main');
});


Route::get("setsession/{email}", [forSession::class,'setSession'])->name('setses');
Route::get("getsession/", [forSession::class,'getSession']);
Route::get("sessonFlash/", [forSession::class,'sessonFlash']);
Route::get("getdata/", [forSession::class,'testApi'])->middleware('throttle:1,3');
