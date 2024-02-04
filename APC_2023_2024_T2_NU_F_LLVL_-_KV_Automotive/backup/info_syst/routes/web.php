<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Livewire\Form;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SMScontroller;
use App\Mail\MailNotify;
use App\Mail\MailTest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Vonage\Account\SmsPrice;
use Illuminate\Support\Facades\Notification;
use Symfony\Component\Mailer\Transport\Smtp\SmtpTransport;

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

  // Notification::route('vonage', config('services.nexmo.sms_from'))
    //->notify(new SMSNotif('Your SMS message here'));


    //Route::get('/sms', function () {
      //  $user = User::find(1); // Replace with your user model retrieval logic
        //$user->notify(new SMSNotif('INV-12345')); // Replace with the actual invoice number

        //return "SMS Notification Sent!";
   // });

 //  Route::get('/sms',[ SMScontroller::class,'index']);

 //oute::get('/sendmail', [MailController::class, 'index']);


Route::get('/send-email/{record}', [EmailController::class, 'sendEmail'])->name('send-email');
Route::get('/email-sent/{record}', [EmailController::class, 'emailSent'])->name('email-sent');




