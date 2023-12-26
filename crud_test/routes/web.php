<?php

use App\Http\Controllers\vehicleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home.index');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/vehicle', [vehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/create', [vehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle', [vehicleController::class, 'store'])->name('vehicle.store');
    Route::match(['get', 'post'], '/vehicle/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicle/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/{vehicle}/destroy', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
});




