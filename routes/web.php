<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PaymentController as UserPaymentController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Middleware\CheckAdmin;

Route::get('/', [UserPaymentController::class, 'index'])->name('admin.payment.index');
Route::post('/get-code', [UserPaymentController::class, 'generateUpiQr'])->name('user.payment.generateUpiQr');

Route::get('/admin/payment', [AdminPaymentController::class, 'index'])->name('admin.payment.index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function (){
     Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginFrom'])->name('admin.login');
     Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);

});

Route::group(['middleware' => [ CheckAdmin::class], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.dashboard');
});
require __DIR__.'/auth.php';
