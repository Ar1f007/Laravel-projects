<?php

use Illuminate\Support\Facades\Route;
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

Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
    
});
Route::get('/', [ProductController::class, 'index']);
Route::get('/details/{id}',[ProductController::class, 'detail']);
Route::get('/search',[ProductController::class, 'search']);

Route::post('/add_to_cart', [ProductController::class, 'add_to_cart']);
Route::get('/cartList', [ProductController::class, 'cartList']);
Route::get('/removeItem/{id}', [ProductController::class, 'removeItem']);
Route::get('/order', [ProductController::class, 'order']);
Route::post('/orderplace', [ProductController::class, 'orderplace']);