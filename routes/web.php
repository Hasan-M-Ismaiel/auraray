<?php

use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\StoreController;
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

Route::get('/', [MainHomeController::class, 'home'])->name('home');
Route::get('/product/{product}', [MainHomeController::class, 'showProduct'])->name('product');
Route::get('/products', [MainHomeController::class, 'products'])->name('products');


Route::get('/service', [MainHomeController::class, 'service'])->name('service');


Route::post('/storeContact', [StoreController::class, 'storeContact'])->name('storeContact');
Route::post('/storeEmail', [StoreController::class, 'storeEmail'])->name('storeEmail');
