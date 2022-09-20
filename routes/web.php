<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PacketsController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\Reservation_NoteController;
use App\Http\Controllers\Salary_NoteController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::controller(PositionController::class)->group(function () {
    Route::get('position', 'index')->name('position');
    Route::get('position/tambahJabatan', 'create')->name('position_create');
    Route::post('position_add', 'store');
});

Route::get('employee',[EmployeeController::class, 'index']);

Route::get('reservation',[Reservation_NoteController::class, 'index']);
Route::get('/tambahReservasi', function(){
    return view('reservation.create');
})->name('reservation_create');

Route::controller(PacketsController::class)->group(function () {
    Route::get('packet', 'index')->name('packet');
    Route::get('packet/tambahPaket', 'create')->name('packet_create');
    Route::post('packet_add', 'store');
});

Route::get('payment',[PaymentController::class, 'index']);

Route::get('equipment',[EquipmentController::class, 'index']);


Route::get('customer',[CustomerController::class, 'index']);
Route::get('/tambahJamaah', function(){
    return view('customer.create');
})->name('customer_create');

Route::get('passport',[PassportController::class, 'index']);



