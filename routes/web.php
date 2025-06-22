<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('evenements', [EventController::class, 'index'])->name('events.index');
Route::get('evenements/{event}', [EventController::class, 'show'])->name('events.show');

Route::prefix('auth')->as('auth.')->group(function () {
    Route::view('login', 'auth.login')->name('login.index');
    Route::post('login', LoginController::class)->name('login.authenticate');
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
    // Home
    Route::get('', [DashboardController::class, 'index'])->name('index');

    // Events
    Route::resource('events', EventController::class)->except('show');

    // Profile
    Route::prefix('profile')->as('profile.')->group(function () {
        Route::get('', [ProfileController::class, 'index'])->name('index');
        Route::patch('', [ProfileController::class, 'update'])->name('update');
        Route::patch('update-password', [ProfileController::class, 'updatePassword'])->name('update-password');
        Route::delete('delete-account', [ProfileController::class, 'deleteAccount'])->name('delete-account');
    });
});
