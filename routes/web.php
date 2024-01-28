<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('evenements', 'App\Http\Controllers\HomeController@events')->name('home.events');

Route::prefix('auth')->as('auth.')->group(function () {
    Route::view('login', 'auth.login')->name('login.index');
    Route::post('login', LoginController::class)->name('login.authenticate');
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::namespace('App\Http\Controllers\Dashboard')->middleware(['auth'])->group(function () {
    # Home
    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');

    # Events
    Route::prefix('dashboard')->group(function () {
        Route::as('dashboard')->resource('events', 'EventController')->except('show');
    });

    # Profile
    Route::prefix('profile')->as('admin.profile.')->group(function () {
        Route::get('', 'ProfileController@index')->name('index');
        Route::patch('', 'ProfileController@update')->name('update');
        Route::patch('update-password', 'ProfileController@updatePassword')->name('update-password');
        Route::delete('delete-account', 'ProfileController@deleteAccount')->name('delete-account');
    });
});
