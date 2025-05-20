<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\PaymentController as UserPaymentController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;

Route::get('/', [UserPaymentController::class, 'index'])->name('admin.payment.index');
Route::get('/admin/payment', [AdminPaymentController::class, 'index'])->name('admin.payment.index');
