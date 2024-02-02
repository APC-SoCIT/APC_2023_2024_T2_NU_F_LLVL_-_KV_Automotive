<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Livewire\Form;
use App\Http\Controllers\PdfController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('home'); // Assuming your home page view is named 'welcome.blade.php'
})->name('home');


Route::get('/admin/login', function () {
    return redirect()->to('login');
})->name('filament.admin.auth.login');


Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::prefix('generate-pdf')->name('generate-pdf.')
    ->group(function () {
        Route::controller(PdfController::class)->group(function () {
            Route::get('vehicle-report/{record}', 'vehicleReport')->name('vehicle.report');
        });
    });
