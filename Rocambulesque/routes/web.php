<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuControllerAdmin;
use App\Http\Controllers\Admin\ReservationControllerAdmin;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AccountOverviewController;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\RservationoverzichtController;
use App\Http\Controllers\ReserveringklantController;
use App\Http\Controllers\ReserveringmakenController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Routing\RouteRegistrar;

/*s
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/account_overzicht', [AccountOverviewController::class, "show"]);
Route::get('/account_overview', [AccountOverviewController::class, "index"]);
Route::get('/account_overzicht', [AccountOverviewController::class, "get"]);
Route::get('/account_overview', [AccountOverviewController::class, "show"]);

Route::get('/reservation', [ReservationController::class, "index"]);
Route::get('/reservation', [ReservationController::class, "show"]);
Route::get('/reservation/create', [ReservationController::class, "create"]);
Route::post('/reservations', [ReservationController::class, "store"]);
Route::get('/reservation/listing', [ReservationController::class, "index_listing"]);
Route::get('/reservation/{id}/edit', [ReservationController::class, "edit"]);
Route::put('/reservation/{id}', [ReservationController::class, "update"]);
Route::delete('/reservation/{id}', [ReservationController::class, "destroy"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuControllerAdmin::class);
    Route::get(('/menus/{id}/edit'), [MenuControllerAdmin::class, 'edit']);
    Route::put('/menus/{id}', [MenuControllerAdmin::class, 'update']);
    Route::delete('/menus/{id}', [MenuControllerAdmin::class, 'destroy']);
    Route::get('menu/create', [MenuControllerAdmin::class, 'create']);
    Route::resource('/reservation', ReservationControllerAdmin::class);
    Route::resource('/tables', TableController::class);
    Route::POST('menus/menusC', [MenuControllerAdmin::class, 'store']);
});

require __DIR__ . '/auth.php';

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/menu', [MenuController::class, 'show']);
require __DIR__ . '/auth.php';
