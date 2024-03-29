<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('authorized')->group( function () {

    Route::post('/payment/make', [\App\Http\Controllers\PaymentController::class,'collect']);
    Route::post('/payment/check-status/{track}', [\App\Http\Controllers\PaymentController::class,'getPaymentStatus'])->name('payment.check');

    Route::post('/payment/validate-payment', [\App\Http\Controllers\PaymentController::class,'validate_payment']);

});

Route::post('/payment/callback', [\App\Http\Controllers\PaymentCallbackController::class,'index']);

