<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\Packet_TypeController;
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

Route::get('position',[PositionController::class, 'index']);
Route::get('employee',[EmployeeController::class, 'index']);
Route::get('reservation',[Reservation_NoteController::class, 'index']);
Route::get('packet',[Packet_TypeController::class, 'index']);
Route::get('payment',[PaymentController::class, 'index']);
Route::get('equipment',[EquipmentController::class, 'index']);
Route::get('customer',[CustomerController::class, 'index']);
Route::get('passport',[PassportController::class, 'index']);

Route::get('/tambahJabatan', function(){
    return view('position.create');
})->name('position_create');