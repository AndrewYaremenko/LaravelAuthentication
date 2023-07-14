<?php

use App\Http\Controllers\Auth\PasswordConfirmationController;
use App\Http\Controllers\Auth\EmailVerificationNotationController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationPromtController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
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

Route::view('/', 'home')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'store'])
        ->name('register');

    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'store'])
        ->name('login');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])
        ->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])
        ->name('password.request');

    Route::get('/reset-password', [ResetPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])
        ->name('logout');

    Route::get('/email/verify', [EmailVerificationPromtController::class, '__invoke'])
        ->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])->middleware('signed')
        ->name('verification.verify');
    Route::post('/email/verification-notification', [EmailVerificationNotationController::class, '__invoke'])
        ->name('verification.send');

    Route::view('/news', 'news')->middleware('verified')
        ->name('news');
    Route::view('/profile', 'profile')->middleware(['verified', 'password.confirm'])
        ->name('profile');

    Route::get('/password-confirm', [PasswordConfirmationController::class, 'show'])
        ->name('password.confirm');
    Route::post('/password-confirm', [PasswordConfirmationController::class, 'store']);

    Route::view('/news', 'news')->middleware('verified')
        ->name('news');
    Route::view('/profile', 'profile')->middleware(['verified', 'password.confirm'])
        ->name('profile');

    Route::get('/password-confirm', [PasswordConfirmationController::class, 'show'])
        ->name('password.confirm');
    Route::post('/password-confirm', [PasswordConfirmationController::class, 'store']);
});
