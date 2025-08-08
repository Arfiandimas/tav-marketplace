<?php

use App\Http\Controllers\Authentication\DealerAuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dealer'], function () {
    // Authentication
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [DealerAuthController::class, 'login']);
    });
});