<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AccountOverviewController;
use App\Http\Controllers\ReservationOverviewController;

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

Route::get('/account_overzicht', [AccountOverviewController::class, "show"]);
Route::get('/account_overview', [AccountOverviewController::class, "index"]);

Route::get('/account_overzicht', [AccountOverviewController::class, "get"]);
Route::get('/account_overview', [AccountOverviewController::class, "show"]);

Route::get('/reservation', [ReservationController::class, "index"]);
Route::get('/reservation', [ReservationController::class, "show"]);
Route::get('/reservation/create', [ReservationController::class, "create"]);
Route::post('/reservation', [ReservationController::class, "store"]);

Route::post('/add', [ReservationController::class, "create"]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
