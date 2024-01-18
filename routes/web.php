<?php

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/order', function () {
    return view('ecommerce_orders');
});

use App\Http\Controllers\OrderController;

Route::get('/order/status', [OrderController::class, 'showOrderStatus'])->name('order.status');
Route::get('/order/update/{status}', [OrderController::class, 'updateOrderStatus'])->name('order.update');
