<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [UserController::class, 'favorite']);
    Route::get('/mypage/profile', [UserController::class, 'register']);
    Route::get('/sell', [ProductController::class, 'sell']);
    Route::get('/purchase/{id}',[ProductController::class, 'purchase']);
    Route::get('/purchase/address',[UserController::class,'address']);
});
Route::get('/', [ProductController::class, 'index']);
Route::get('/item/{product_id}', [ProductController::class, 'detail']);
