<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DockController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\WarehouseController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::resource('clients', ClientController::class);
Route::resource('containers', ContainerController::class);
Route::resource('docks', DockController::class);
Route::resource('products', ProductController::class);
Route::resource('ships', ShipController::class);
Route::resource('staffs', StaffController::class);
Route::resource('teams', TeamController::class);
Route::resource('trucks', TruckController::class);
Route::resource('warehouses', WarehouseController::class);
