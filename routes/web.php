<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\resetController;
use App\Http\Livewire\Dashboard\DepositOrWithdraw;
use App\Http\Livewire\Dashboard\Promotions;
use App\Http\Livewire\Dashboard\Referrals;
use App\Http\Livewire\Dashboard\Transactions;
use App\Http\Livewire\Dashboard\Exchange;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::post('/check', [resetController::class, 'check'])->name('check');
Route::get('/password-reset/', [resetController::class, 'resetPass'])->name('reset.password');
Route::post('/password-updated/', [resetController::class, 'updatePassword'])->name('update.password');

/*
 * google auth
 */
Route::get('/sign-in/google', [\App\Http\Livewire\Login::class, 'google'])->name('sign-google');
Route::get('/sign-in/google/redirect', [\App\Http\Livewire\Login::class, 'googleRedirect']);

Route::middleware(['auth','verified'])->group(function () {

    Route::get('/phone-verify',\App\Http\Livewire\PhoneVerify::class)->name('phone-verify');
    Route::post('/phone-check',[\App\Http\Controllers\PhoneValidController::class,'verify'])->name('phone-check');
    Route::post('/code-check',[\App\Http\Controllers\PhoneValidController::class,'codeVerify'])->name('code-check');

    Route::prefix('dashboard')
        ->middleware('phone')
        ->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
            Route::get('/transactions', Transactions::class)->name('transactions');
            Route::get('/referrals', Referrals::class)->name('referrals');
            Route::get('/deposit-or-withdraw', DepositOrWithdraw::class)->name('depositOrWithdraw');
            Route::get('/exchange', Exchange::class)->name('exchange');
            Route::get('/promotions', Promotions::class)->name('promotions');
    });
});
