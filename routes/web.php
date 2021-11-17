<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Middleware\EnsureTokenIsValid;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/categories', function(){
    return view('category');
});
Route::get('/basket', function(){
    return view('basket');
});
Route::post('/product/1', function(){
    return view('product');
});
Route::get('/ordering', function(){
    return view('order');
});
Route::get('/products', function(){
    return view('index');
});
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