<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\RegisterController;
use App\Http\Controllers\api\v1\ProductController;


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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/login-api',[RegisterController::class,'login'])->name('login');;
Route::middleware('auth:api')->get('/get-user',[RegisterController::class,'fetch']);
Route::middleware('auth:api')->post('/logout',[RegisterController::class,'logout']);

// ==================================  PRODUCTS   ==============================================


Route::middleware('auth:api')->get('/fetch-products',[ProductController::class,'index']);












