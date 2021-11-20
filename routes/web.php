<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Middleware\EnsureTokenIsValid;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Here is where you can register web routes for your application. These
|
*/

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/basket', [MainController::class, 'basket'])->name('basket');
Route::post('/product/{product_code?}', [MainController::class, 'product']);
Route::get('/ordering', [MainController::class, 'ordering']);
Route::get('/products', [MainController::class, 'index']);
Route::get('/{code?}', [MainController::class, 'category']);
Route::get('/dashboard/login', function(){
    return view('dashboard/login');
});
Route::get('/dashboard/categories', function(){
    return view('dashboard/categories');
});
Route::get('/dashboard/products', function(){
    return view('dashboard/products');
});
Route::get('/dashboard/orders', function(){
    return view('dashboard/orders');
});
Route::get('dashboard/order/1', function(){
    return view('dashboard/order');
});
Route::get('dashboard/open', function(){
    return view('dashboard/open');
});
Route::get('dashboard/edit', function(){
    return view('dashboard/edit');
});