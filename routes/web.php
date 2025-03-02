<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.home');
    })->name('dashboard');

    Route::get('/', function () {
        return view('dashboard');
    });
});

//Route::get('/', function () {
//    return view('dashboard');
//});
//Route::middleware(['web', 'auth', 'verified'])->group(function () {
//
//    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
//
//    Route::get('SeeAllNotifications', ['as' => 'SeeAllNotifications', 'uses' => [\App\Http\Controllers\NotificationController::class, 'seeAllNotifications']])->middleware(['web', 'auth']);
//
//    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//});
