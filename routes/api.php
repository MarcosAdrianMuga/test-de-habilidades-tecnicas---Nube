<?php

use App\Http\Controllers\MangaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;

// Public routes
Route::get('/mangas', [MangaController::class, 'index']);
Route::get('/mangas/{id}', [MangaController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{categoryId}/subcategories', [CategoryController::class, 'subcategories']);

// Private routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('mangas', MangaController::class)->except(['index', 'show']);
    Route::apiResource('categories', CategoryController::class)->except(['index']);
    Route::apiResource('subcategories', SubcategoryController::class);
});