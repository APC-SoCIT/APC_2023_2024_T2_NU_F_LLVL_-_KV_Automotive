<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


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

// routes/web.php
Route::get('/user', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();
   
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');


    Route::get('/admin/users', [AdminController::class, 'viewAllUsers'])->name('admin.view-all-users');
    Route::get('/admin/edit-user-role/{user}', [AdminController::class, 'editUserRole'])->name('admin.edit-user-role');
    Route::post('/admin/update-user-role/{user}', [AdminController::class, 'updateUserRole'])->name('admin.update-user-role');
    Route::delete('/admin/delete-user/{user}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');


    Route::get('/vehicle', [vehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/create', [vehicleController::class, 'create'])->name('vehicle.create');
    Route::post('/vehicle', [vehicleController::class, 'store'])->name('vehicle.store');
    Route::match(['get', 'post'], '/vehicle/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicle/{vehicle}/update', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/{vehicle}/destroy', [VehicleController::class, 'destroy'])->name('vehicle.destroy');


});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:staff'])->group(function () {
   
    Route::get('/staff/home', [HomeController::class, 'staffHome'])->name('staff.home');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
