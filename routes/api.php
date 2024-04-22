<?php

use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SupplierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('subscribers', SubscriberController::class);
Route::apiResource('suppliers', SupplierController::class);
