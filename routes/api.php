<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/products', App\Http\Controllers\Api\v1\ProductController::class)->only(['index']);
Route::apiResource('v1/order', App\Http\Controllers\Api\v1\OrderController::class)->only(['index','store','update']);
Route::apiResource('v1/order', App\Http\Controllers\Api\v1\OrderController::class)->only(['index','store','update']);
Route::apiResource('v1/order-consolidate', App\Http\Controllers\Api\v1\OrderConsolidateController::class)->only(['index',]);
Route::apiResource('v1/delivery', App\Http\Controllers\Api\v1\DeliveryController::class)->only(['index','update']);
