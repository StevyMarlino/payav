<?php

use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Dashboard\DepositOrWithdraw;
use App\Http\Livewire\Dashboard\Referrals;
use App\Http\Livewire\Dashboard\Transactions;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/transactions', Transactions::class)->name('transactions');
        Route::get('/referrals', Referrals::class)->name('referrals');
        Route::get('/deposit-or-withdraw', DepositOrWithdraw::class)->name('depositOrWithdraw');
    });
});
