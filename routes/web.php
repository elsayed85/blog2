<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SharedController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group([
    'middleware' => ['auth'],
], function () {
    Route::get('/logout', [SharedController::class, 'logout'])->name('shared.logout');
});
