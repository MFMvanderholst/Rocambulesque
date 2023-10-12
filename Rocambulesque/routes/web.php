<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RservationoverzichtController;
use App\Http\Controllers\ReserveringklantController;
use App\Http\Controllers\ReserveringmakenController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/',[WelcomeController::class,'showWelcomePage']);
Route::get('/welcome',[WelcomeController::class,'showWelcomePage']);
Route::get('/reservationoverzicht',[RservationoverzichtController::class,'showReservationPage']);
Route::get('/menu',[MenuController::class,'show']);
Route::get('/reserveringklant',[ReserveringklantController::class,'showReservationCustomer']);
Route::get('/reserveringmaken',[ReserveringmakenController::class,'showMakeReservation']);