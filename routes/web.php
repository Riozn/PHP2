<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customersController;
use App\Http\Controllers\dishesController;
use App\Http\Controllers\InvoiceDetailsController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\ReservationController;



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
    return view('welcome');
});


Route::resource('customers', customersController::class);
Route::resource('dish', dishesController::class);
Route::resource('orders', ordersController::class);
Route::resource('invoiceDetails', InvoiceDetailsController::class);
Route::resource('reservacion', 'ReservacionController');






