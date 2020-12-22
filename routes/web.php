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
Route::post('/product/{id}',[App\Http\Controllers\ProductController::class, 'remove'])->name('product.remove');
Route::get('/productStats', [App\Http\Controllers\ProductStatsController::class, 'index'])->name('productStats');


Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/delete/{id}', [App\Http\Controllers\EmployeeController::class,'delete']);
Route::get('/employee/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employee.profile');
Route::get('/employee/delete/{id}', [App\Http\Controllers\EmployeeController::class, 'deletemyself'])->name('employee.delete');
Route::get('/employee/{user}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::patch('/employee/edit/{user}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');
Route::get('/employee/statistics/{id}', [App\Http\Controllers\EmployeeController::class, 'statistics'])->name('employee.statistics');
Route::get('/order/discount', [App\Http\Controllers\OrderController::class, 'discount'])->name('order.discount');


Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('profile.show');
Route::post('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

Route::get('/client/edit/{user}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client.edit');
Route::patch('/client/{user}', [App\Http\Controllers\ClientController::class, 'update'])->name('client.update');
Route::get('/client/statistics', [App\Http\Controllers\ClientController::class, 'statistics'])->name('client.statistics');

Route::get('/supplier/edit/{user}', [App\Http\Controllers\ClientController::class, 'edit'])->name('supplier.edit');
Route::patch('/supplier/{user}', [App\Http\Controllers\ClientController::class, 'update'])->name('supplier.update');

Route::get('/feedbacks/{product_id}', [App\Http\Controllers\FeedbackController::class, 'show'])->name('feedbacks.show');
Route::get('/feedbacks/create/{product_id}', [App\Http\Controllers\FeedbackController::class, 'create_view'])->name('feedbacks.create_view');
Route::post('/feedbacks/create/{product_id}', [App\Http\Controllers\FeedbackController::class, 'create'])->name('feedbacks.create');

// Display all
Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
// Create
Route::get('/order/create/id/{id}/date/{date}/period/{period}/status/{status}/done/{done}/price/{price}', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
// Edit single
Route::get('/order/edit/{id}', [App\Http\Controllers\OrderController::class, 'edit'])->name('orders.edit');
Route::post('/order/edit', [App\Http\Controllers\OrderController::class, 'update'])->name('orders.edit.post');
// Remove single
Route::get('/order/decline/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('orders.destroy');
// Show single
Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('order.single');
Route::get('/order/pay/{id}', [App\Http\Controllers\OrderController::class, 'pay'])->name('order.pay');
Route::get('/order/debt/{id}', [App\Http\Controllers\OrderController::class, 'debt'])->name('order.debt');
Route::post('/order/bank', [App\Http\Controllers\OrderController::class, 'bankPay'])->name('order.bank');
Route::get('/order/bank/{id}', [App\Http\Controllers\OrderController::class, 'bank'])->name('order.bank.id');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
