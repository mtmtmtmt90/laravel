<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\dashboard\OrderController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\UserOrderController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\SysAdmin;

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

Route::get('/dd', function(){
    return view('myOrders');
});

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', [MainController::class, 'index'])->name('index');
Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::group(['prefix' => '/basket'], function(){
    Route::post('/add/{id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
    Route::group(['middleware' => 'bas.empty'], function(){
        Route::get('/', [BasketController::class, 'basket'])->name('basket');
        Route::post('/rmv/{id}', [BasketController::class, 'basketRmv'])->name('basketRmv');
    });
});
Route::get('/ordering', [BasketController::class, 'ordering'])->name('ordering');
Route::post('/order/confirm', [BasketController::class, 'confirm'])->name('orderConfirm');
Route::get('/product/{product_code?}', [MainController::class, 'product'])->name('product');
Route::get('/products', [MainController::class, 'index'])->name('products');
Route::middleware('guest')->group(function () {
    Route::get('/sign_in', [MainController::class, 'sign_in'])->name('signIn');
    Route::post('/sign_in/confirm', [LoginController::class, '__constructor'])->name('login');
    Route::get('/sign_up', [MainController::class, 'sign_up'])->name('signUp');
    Route::post('/sign_up/confirm', [RegisterController::class, '__construct'])->name('register');
});

Route::middleware('auth')->group(function(){
    Route::resource('userorders', UserOrderController::class);
});
Route::get('/sign_out', [LoginController::class, 'logout'])->name('signOut')->middleware('auth');

Route::get('/{code?}', [MainController::class, 'category']);

Route::group(['middleware' => 'sysadmin', 'prefix' => '/dashboard/'], function () {

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);

    Route::resource('orders', OrderController::class);

});


