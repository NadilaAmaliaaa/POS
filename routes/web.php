<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/products', [ProductsController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'food']);
    Route::get('/beauty-health', [ProductsController::class, 'beauty']);
    Route::get('/baby-kid', [ProductsController::class, 'kid']);
    Route::get('/home-care', [ProductsController::class, 'home']);
});

Route::get('/profil/{id}/{name}', [UserController::class, 'profil']);
Route::get('/transaction/{transaksi?}', [TransactionController::class, 'transaksi']);