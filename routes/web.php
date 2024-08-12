<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('home');
    })->name('dashboard');
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('home');
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
