<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get( "/products",[ProductController::class,"index"]);
Route::get("/products/create",[ProductController::class,"create"]);
Route::get("/products/{id}",[ProductController::class,"show"]);
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

Route::prefix('admin')->group(function () {
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); 
});