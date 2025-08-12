<?php

use App\Http\Controllers\Admin\MasterData\BrandController;
use App\Http\Controllers\Admin\MasterData\StoreLocationController;
use App\Http\Controllers\Admin\MasterData\TransmissionController;
use App\Http\Controllers\Admin\MasterData\TypeController;
use App\Http\Controllers\Authentication\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    // Authentication
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AdminAuthController::class, 'login']);
    });

    Route::group(['prefix' => 'master-data', 'middleware' => 'auth:admin'], function () {
        Route::group(['prefix' => 'store-location'], function () {
            Route::get('', [StoreLocationController::class, 'index']);
            Route::post('', [StoreLocationController::class, 'createUpdate']);
            Route::delete('{id}', [StoreLocationController::class, 'delete']);
        });
        Route::group(['prefix' => 'brand'], function () {
            Route::get('', [BrandController::class, 'index']);
            Route::post('', [BrandController::class, 'createUpdate']);
            Route::delete('{id}', [BrandController::class, 'delete']);
        });
        Route::group(['prefix' => 'type'], function () {
            Route::get('', [TypeController::class, 'index']);
            Route::post('', [TypeController::class, 'createUpdate']);
            Route::delete('{id}', [TypeController::class, 'delete']);
        });
        Route::group(['prefix' => 'transmission'], function () {
            Route::get('', [TransmissionController::class, 'index']);
            Route::post('', [TransmissionController::class, 'createUpdate']);
            Route::delete('{id}', [TransmissionController::class, 'delete']);
        });
    });
});