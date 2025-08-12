<?php

use App\Http\Controllers\Admin\MasterData\BrandController;
use App\Http\Controllers\Admin\MasterData\CarModelController;
use App\Http\Controllers\Admin\MasterData\ColorController;
use App\Http\Controllers\Admin\MasterData\StoreLocationController;
use App\Http\Controllers\Admin\MasterData\TransmissionController;
use App\Http\Controllers\Admin\MasterData\TypeController;
use App\Http\Controllers\Admin\MasterData\VariationController;
use App\Http\Controllers\Authentication\AdminAuthController;
use App\Http\Controllers\MasterData\FeatureCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
    // Authentication
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AdminAuthController::class, 'login']);
    });

    Route::group(['prefix' => 'master-data', 'middleware' => 'auth:admin'], function () {
        // Store Location
        Route::group(['prefix' => 'store-location'], function () {
            Route::get('', [StoreLocationController::class, 'index']);
            Route::post('', [StoreLocationController::class, 'createUpdate']);
            Route::delete('{id}', [StoreLocationController::class, 'delete']);
        });
        // Brand
        Route::group(['prefix' => 'brand'], function () {
            Route::get('', [BrandController::class, 'index']);
            Route::post('', [BrandController::class, 'createUpdate']);
            Route::delete('{id}', [BrandController::class, 'delete']);
            // Car Model
            Route::group(['prefix' => '{brand_id}/car-model'], function () {
                Route::get('', [CarModelController::class, 'index']);
                Route::post('', [CarModelController::class, 'createUpdate']);
                Route::delete('{id}', [CarModelController::class, 'delete']);
                // Variation
                Route::group(['prefix' => '{car_model_id}/variation'], function () {
                    Route::get('', [VariationController::class, 'index']);
                    Route::post('', [VariationController::class, 'createUpdate']);
                    Route::delete('{id}', [VariationController::class, 'delete']);
                });
            });
        });
        // Type
        Route::group(['prefix' => 'type'], function () {
            Route::get('', [TypeController::class, 'index']);
            Route::post('', [TypeController::class, 'createUpdate']);
            Route::delete('{id}', [TypeController::class, 'delete']);
        });
        // Transmission
        Route::group(['prefix' => 'transmission'], function () {
            Route::get('', [TransmissionController::class, 'index']);
            Route::post('', [TransmissionController::class, 'createUpdate']);
            Route::delete('{id}', [TransmissionController::class, 'delete']);
        });
        // Color
        Route::group(['prefix' => 'color'], function () {
            Route::get('', [ColorController::class, 'index']);
            Route::post('', [ColorController::class, 'createUpdate']);
            Route::delete('{id}', [ColorController::class, 'delete']);
        });
        // Feature Category
        Route::group(['prefix' => 'feature-category'], function () {
            Route::get('', [FeatureCategoryController::class, 'index']);
            Route::post('', [FeatureCategoryController::class, 'createUpdate']);
            Route::delete('{id}', [FeatureCategoryController::class, 'delete']);
        });
    });
});