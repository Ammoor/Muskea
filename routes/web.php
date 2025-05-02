<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthAccountsController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('google/auth/request', [AuthAccountsController::class, 'googleRequest']);

Route::get('google/auth/redirect', [AuthAccountsController::class, 'googleRedirect']);

Route::get('facebook/auth/request', [AuthAccountsController::class, 'facebookRequest']);

Route::get('facebook/auth/redirect', [AuthAccountsController::class, 'facebookRedirect']);

require __DIR__ . '/auth.php';
