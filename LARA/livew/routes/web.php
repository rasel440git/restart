<?php

use App\Http\Controllers\HomeController;
use App\Livewire\BirdForm;
use App\Livewire\Counter;
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

Route::get('/counter', Counter::class);
Route::get('/bird', BirdForm::class);
Route::get("success", [HomeController::class, 'redirectSuccess']);//->name('success');

