<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/products', App\Http\Controllers\API\V1\ProductController::class)->only(['index']);
Route::apiResource('v1/order', App\Http\Controllers\API\V1\OrderController::class)->only(['index','store']);

