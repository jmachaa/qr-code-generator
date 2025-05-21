<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PaymentController as UserPaymentController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\RedirectIfAdminUnauthenticated;

Route::get('/', [UserPaymentController::class, 'index'])->name('user.payment.index');
Route::get('/fetch_diocese_list', [UserPaymentController::class, 'fetch_diocese_list'])->name('user.payment.fetch_diocese');
Route::get('/fetch_parishes_by_diocese/{diocese_id}', [UserPaymentController::class, 'fetch_parishes_by_diocese']);
Route::get('/fetch_countries_list', [UserPaymentController::class, 'fetch_countries_list'])->name('user.payment.fetch_countries_list');
Route::post('/get-code', [UserPaymentController::class, 'generateUpiQr'])->name('user.payment.generateUpiQr');
Route::get('/admin/payment', [AdminPaymentController::class, 'index'])->name('admin.payment.index');
Route::post('user/payment/submit', [UserPaymentController::class,'submitPayment'])->name('user.payment.submit');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin'], function (){
     Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginFrom'])->name('admin.login');
     Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);

});

Route::group([
    'middleware' => [RedirectIfAdminUnauthenticated::class, CheckAdmin::class],
    'prefix' => 'admin'
], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.dashboard');
    Route::get('payment/index', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('admin.payment.index');
    Route::get('payment/fetch_data', [App\Http\Controllers\Admin\PaymentController::class,'fetch_data'])->name('admin.payment.fetch_data');

//-----------parish managing routes -----------------------------------//
    Route::get('/parish/index', [App\Http\Controllers\Admin\ParishController::class, 'index']);
    Route::get('/parish/create', [App\Http\Controllers\Admin\ParishController::class, 'create']);
    Route::post('/parish/store', [App\Http\Controllers\Admin\ParishController::class, 'store']);
    Route::get('/manage_parish_data_load/fetch_data', [App\Http\Controllers\Admin\ParishController::class, 'fetch_data']);
    Route::get('/parish_data_load', [App\Http\Controllers\Admin\ParishController::class, 'parish_data_load']);
    Route::post('/parish_tbl_sortable', [App\Http\Controllers\Admin\ParishController::class, 'parish_tbl_sortable']);
    Route::post('/action_status_parish', [App\Http\Controllers\Admin\ParishController::class, 'action_status_parish']);
    Route::get('/parish/{id}/edit', [App\Http\Controllers\Admin\ParishController::class, 'edit']);
    Route::post('/parish/update/{id}', [App\Http\Controllers\Admin\ParishController::class, 'update']);
    Route::post('/delete_parish', [App\Http\Controllers\Admin\ParishController::class, 'destroy']);
    Route::post('/delete_parish_icon', [App\Http\Controllers\Admin\ParishController::class, 'delete_icon']);
    Route::get('/parish/fetch_diocese', [App\Http\Controllers\Admin\ParishController::class, 'fetch_diocese']);
//------------route ends here------------------------//

//-----------------------Diocese Controller routes-------------------------------------------

    Route::get('/diocese/index', [App\Http\Controllers\Admin\DioceseController::class, 'index']);
    Route::get('/diocese/create', [App\Http\Controllers\Admin\DioceseController::class, 'create']);
    Route::post('/diocese/store', [App\Http\Controllers\Admin\DioceseController::class, 'store']);
    Route::get('/manage_donate_data_load/fetch_data', [App\Http\Controllers\Admin\DioceseController::class, 'fetch_data']);
    Route::get('/diocese_data_load', [App\Http\Controllers\Admin\DioceseController::class, 'donate_data_load']);
    Route::post('/diocese_tbl_sortable', [App\Http\Controllers\Admin\DioceseController::class, 'donate_tbl_sortable']);
    Route::post('/action_status_diocese', [App\Http\Controllers\Admin\DioceseController::class, 'action_status_diocese']);
    Route::get('/diocese/{id}/edit', [App\Http\Controllers\Admin\DioceseController::class, 'edit']);
    Route::post('/diocese/update/{id}', [App\Http\Controllers\Admin\DioceseController::class, 'update']);
    Route::post('/delete_diocese', [App\Http\Controllers\Admin\DioceseController::class, 'destroy']);
    Route::post('/delete_diocese_icon', [App\Http\Controllers\Admin\DioceseController::class, 'delete_icon']);
    Route::post('/delete_diocese_file', [App\Http\Controllers\Admin\DioceseController::class, 'delete_file']);

    // ----------------------------------Diocese route ends-------------------------------------------------------
});

