<?php

use App\Http\Controllers\demoControler;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('firstRoute', [demoControler::class,'test1']);
Route::post('/sndRoute', [demoControler::class,'test2']);
Route::get("thrdRoute", [demoControler::class,'test3']);

Route::get("student/{name}/{roll}/{city}", [demoControler::class,'reqFunction']);
Route::get("input", [demoControler::class,'inputFunction']);
Route::get("header/{id}", [demoControler::class,'headerFunction']);
Route::get("invoice/{id}/item/{itemName}", [demoControler::class,'invoiceFunction']);
Route::get("invoices/", [demoControler::class,'allInvoices']);
Route::get("countries/", [demoControler::class,'allCountries']);

