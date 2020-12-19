<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/product/{id}',[App\Http\Controllers\ProductController::class, 'single']);

Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/delete/{id}', [App\Http\Controllers\EmployeeController::class,'delete']);
Route::get('/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.profile');
Route::get('/employee/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'deletemyself'])->name('employee.delete');
Route::get('/employee/{user}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::patch('/employee/edit/{user}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/statistics/{id}', [App\Http\Controllers\EmployeeController::class, 'statistics'])->name('employee.statistics');


Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('profile.show');

Route::get('/client/edit/{user}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::patch('/client/{user}', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');

Route::get('/supplier/edit/{user}', [App\Http\Controllers\ClientController::class, 'edit'])->name('supplier.edit');
Route::patch('/supplier/{user}', [App\Http\Controllers\ClientController::class, 'update'])->name('supplier.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
