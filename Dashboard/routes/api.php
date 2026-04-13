<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoyaltyLevelController;

Route::apiResource('cars', CarController::class);
Route::apiResource('drivers', DriverController::class);
Route::apiResource('rentals', RentalController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('brands', BrandController::class);
Route::apiResource('users', UserController::class);
Route::apiResource('loyalty-levels', LoyaltyLevelController::class);

// endpoints especiales 🔥
Route::patch('cars/{id}/status', [CarController::class, 'updateStatus']);
Route::patch('rentals/{id}/status', [RentalController::class, 'updateStatus']);