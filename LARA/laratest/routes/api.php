<?php

use App\Http\Controllers\demoControler;
use App\Http\Controllers\qbController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("student/{loction}/{bGroup}", [demoControler::class,'reqFunction']);
Route::post("student/", [demoControler::class,'reqFunction']);
Route::post("upload/", [demoControler::class,'fileUpload']);
Route::match(['get','post'],"cook/", [demoControler::class,'cookeReq']);

Route::post("insert/{id}", [qbController::class,'insertAction']);
Route::put("update/{id}", [qbController::class,'updateAction']);
Route::post("upsert/{brandName}", [qbController::class,'updateAction']);
Route::post("create-data", [qbController::class,'upsertAction']);




