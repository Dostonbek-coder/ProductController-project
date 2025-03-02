<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get( "/products",[ProductController::class,"index"]);
Route::get("/products/create",[ProductController::class,"create"]);
Route::get('/products/search', [ProductController::class, "search"])->name('products.search');

 Route::get("products/destroy/{id}",[ProductController::class,"destroy"]);
Route::get("/products/{id}",[ProductController::class,"show"]);