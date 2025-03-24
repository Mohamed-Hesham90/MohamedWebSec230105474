<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
})->name('home');  // Added name for easier reference

// Lecture routes
Route::prefix('lec')->controller(LecController::class)->group(function () {
    Route::get('/lec-01', 'lec01')->name('lec.01');
    Route::get('/lec-02', 'lec02')->name('lec.02');
    Route::get('/lec-03', 'lec03')->name('lec.03');
    Route::get('/lec-04', 'lec04')->name('lec.04');
    Route::get('/lec-05', 'lec05')->name('lec.05');
});

// Lab routes
Route::prefix('lab')->controller(LabController::class)->group(function () {
    Route::get('/lab-01', 'lab01')->name('lab.01');
    Route::get('/lab-02', 'lab02')->name('lab.02');
    Route::get('/lab-03', 'lab03')->name('lab.03');
    Route::get('/lab-04', 'lab04')->name('lab.04');
    Route::get('/lab-05', 'lab05')->name('lab.05');
});

// Auth routes
Route::prefix('take-a-look')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('auth.login');
    Route::get('/sign-up', 'showSignupForm')->name('auth.signup');
    Route::post('/login', 'login');
    Route::post('/sign-up', 'signup');
    Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])
         ->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail']);
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])
         ->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'reset'])
         ->name('password.update');
});
Route::resource('products', ProductController::class);
