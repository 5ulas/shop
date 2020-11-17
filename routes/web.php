<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('/products', [App\Http\Controllers\ProductController::class, 'getData'])->name('products');
Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('/product/{id}',[App\Http\Controllers\ProductController::class, 'single']);
Route::get('user/{id}', [App\Http\Controllers\UserController::class,'show'])->name('profile');
Route::get('employees/delete/{id}', [App\Http\Controllers\EmployeeController::class,'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
