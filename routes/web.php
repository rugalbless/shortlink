<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])
    ->middleware('guest')
    ->name('login');

Route::post('/shortlink', [\App\Http\Controllers\ShortlinkController::class, 'store'])
    ->middleware('auth:sanctum')
    ->name('shortlink.store');


Route::get('/static', [\App\Http\Controllers\ShortlinkController::class, 'static'])
    ->name('shortlink.static');
