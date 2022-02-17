<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ProductTagController;
use App\Http\Controllers\HomeController;

Route::get('', [HomeController::class, 'index']);

Route::prefix('products')->group(function (){
    Route::get('/form', [ProductController::class, 'form']);
    Route::get('/', [ProductController::class, 'getAllProducts']);
    Route::get('/{id}', [ProductController::class, 'getProductById']);
    Route::post('/', [ProductController::class, 'create']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'delete']);
});

Route::prefix('tags')->group(function (){
    Route::view('/form', 'tag/form');
    Route::get('/', [TagController::class, 'getAllTags']);
    Route::get('/{id}', [TagController::class, 'getTagById']);
    Route::post('/', [TagController::class, 'create']);
    Route::put('/{id}', [TagController::class, 'update']);
    Route::delete('/{id}', [TagController::class, 'delete']);
});

Route::prefix('product-tags')->group(function (){
    Route::get('/', [ProductTagController::class, 'form']);
    Route::post('/', [ProductTagController::class, 'create']);
    Route::put('/{id}', [ProductTagController::class, 'update']);
    Route::delete('/{id}', [ProductTagController::class, 'delete']);
});
