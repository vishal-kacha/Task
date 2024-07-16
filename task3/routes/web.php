<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('/api/products', [ProductController::class, 'index']);
Route::get('/api/products/{product}', [ProductController::class, 'show']);
Route::post('/api/new-product', [ProductController::class, 'store']);
Route::put('/api/update-product/{product}', [ProductController::class, 'update']);
Route::delete('/api/delete-product/{product}', [ProductController::class, 'destroy']);


require __DIR__.'/auth.php';
