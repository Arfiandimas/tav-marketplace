<?php

use App\Http\Controllers\Authentication\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    // Authentication
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AdminAuthController::class, 'login']);
    });
});