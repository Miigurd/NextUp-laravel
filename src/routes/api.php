<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrderController;

// User Registration
Route::post('/register', [AuthController::class, 'register']);

// Customer Login
Route::post('/login/customer', [AuthController::class, 'customerLogin']);

// Admin Login
Route::post('/login/admin', [AuthController::class, 'adminLogin']);

Route::get('/carts/{user_id}', [CartController::class, 'index']);
Route::get('/carts/show', [CartController::class, 'show']);
Route::post('/carts', [CartController::class, 'store']);
Route::patch('/carts/{cartItem}', [CartController::class, 'update']);
Route::delete('/carts/{cartItem}', [CartController::class, 'destroy']);

Route::get('/orders', [OrderController::class, 'allOrders']);
Route::get('/orders/{user_id}', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::patch('/orders/{order}/status', [OrderController::class, 'updateStatus']);
Route::get('/orders/recent', [OrderController::class, 'recentOrders']);

Route::apiResource('products', ProductController::class);

?>