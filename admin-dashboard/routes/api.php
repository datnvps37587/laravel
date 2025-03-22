<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CategoryControllerAPI;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\NewsController;
use App\Http\Controllers\API\CommentController;


Route::apiResource('categories', CategoryControllerAPI::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('news', NewsController::class);
Route::apiResource('comments', CommentController::class);

Route::prefix('api')->group(function () {
    Route::get('/categories', [CategoryControllerAPI::class, 'index']);
    Route::post('/categories', [CategoryControllerAPI::class, 'store']);
    Route::get('/categories/{id}', [CategoryControllerAPI::class, 'show']);
    Route::put('/categories/{id}', [CategoryControllerAPI::class, 'update']);
    Route::delete('/categories/{id}', [CategoryControllerAPI::class, 'destroy']);
});