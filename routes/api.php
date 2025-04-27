<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GetPerfumesController;
use App\Http\Controllers\Api\RegisteredClientController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get/perfumes', [GetPerfumesController::class, 'getAllPerfumes']);

Route::get('/get/perfume/{perfumeID}', [GetPerfumesController::class, 'getPerfume']);

// Route::post('/login',)

Route::post('/register', [RegisteredClientController::class, 'register']);
