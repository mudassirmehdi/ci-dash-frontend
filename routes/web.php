<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('log');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'log'])->name('log');
    Route::get('/register', [AuthController::class, 'reg'])->name('register');
    Route::post('/login', [AuthController::class, 'logged'])->name('logged');
    Route::post('/register', [AuthController::class, 'up'])->name('up');
});



/**ci-dash-laravel routes */
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('home');
    Route::get('/assign-tokens', [DashboardController::class,'tokens'])->name('assign-tokens');
    Route::get('/buy-tokens', [DashboardController::class,'buy_token'])->name('buy-tokens');
    Route::get('/balance', [DashboardController::class,'balance'])->name('balance');
    Route::get('/blank', [DashboardController::class,'blank'])->name('blank');
    Route::get('/password', [DashboardController::class,'password'])->name('password');
    Route::get('/contact', [DashboardController::class,'contact'])->name('contact');
    Route::get('/cooperative', [DashboardController::class,'cooperative'])->name('cooperative');
    Route::get('/cui', [DashboardController::class,'cui'])->name('cui');
    Route::get('/faq', [DashboardController::class,'faq'])->name('faq');
    Route::get('/funds', [DashboardController::class,'funds'])->name('funds');
    Route::get('/income', [DashboardController::class,'income'])->name('income');
    Route::get('/invoices', [DashboardController::class,'invoices'])->name('invoices');
    Route::get('/member-to-member', [DashboardController::class,'member'])->name('member');
    Route::get('/my-tokens', [DashboardController::class,'my_tokens'])->name('my-tokens');
    Route::get('/profile-overview', [DashboardController::class,'profile_overview'])->name('profile-overview');
    Route::get('/profile-setting', [DashboardController::class,'profile_setting'])->name('profile-setting');
    Route::get('/transactions', [DashboardController::class,'transactions'])->name('transactions');
    Route::get('/withdraw-funds', [DashboardController::class,'withdraw_funds'])->name('withdraw-funds');
    Route::get('/wpif-cooperative', [DashboardController::class,'wpif_cooperative'])->name('wpif-cooperative');
    Route::get('/wpif-cui-team', [DashboardController::class,'wpif_cui_team'])->name('wpif-cui-team');
});
