<?php

use App\Http\Controllers\Authentication\UserAuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'user'], function () {
    // Authentication
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [UserAuthController::class, 'login']);
        Route::get('google', [UserAuthController::class, 'redirectToProvider']);
        Route::get('google/callback', [UserAuthController::class, 'handleProviderCallback']);
    });
});