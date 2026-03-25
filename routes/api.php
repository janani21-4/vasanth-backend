<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::post('/admin/login', [AuthController::class, 'authenticate']);

Route::resource('categories', CategoryController::class);
Route::resource('brands', BrandController::class);

Route::post('/checkout', [CheckoutController::class, 'store']);