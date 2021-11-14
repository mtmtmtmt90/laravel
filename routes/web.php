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
    return view('welcome');
});
Route::get('/php/{name?}', [Controller::class, 'php']);
Route::get('/example/{name?}', [Controller::class, 'example'])->name('ex');
//Route::view('/example','example');
Route::prefix('doors')->group(function () {
    Route::get('/door1', function () { return view('doors/door1');});
    Route::get('/door2', function(){ return view('doors/door2');});
    Route::get('/door3', function(){ return view('doors/door3');});
});
Route::get('/login', function(){ return view('login'); })->name('login');
Route::post('/auth', [EnsureTokenIsValid::class, 'handle']);
Route::fallback([Controller::class, 'fallback']);
/*
Route::get('map', function(){ return view('map'); })->missing(function(){
    return redirect()->route('ex');
});
*/