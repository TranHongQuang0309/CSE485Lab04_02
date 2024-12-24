<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\CustormerController;

Route::get("/", [ProductController::class, "home"])->name('home');

Route::resource('products', ProductController::class)->except(['show']);
Route::resource('orders', OrderController::class)->except(['show']);
Route::get('orders/customers/{customer}/history', [OrderController::class, 'customerOrderHistory'])->name('orders.history');
Route::resource('order_details', OrderDetailController::class)->except(['show']);
Route::resource('customers', CustormerController::class)->except(['show']);
