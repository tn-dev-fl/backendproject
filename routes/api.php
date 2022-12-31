<?php

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::delete('deleteclient/{id}',[ClientController::class,'deleteclient']); 
Route::put('updateclient/{id}',[ClientController::class,'updateclient']); 
Route::post('addclient',[ClientController::class,'addclient']); 
Route::get('allclient',[ClientController::class,'client']); 
Route::get('client/{id}',[ClientController::class,'getclientById']); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
