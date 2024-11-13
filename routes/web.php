<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', \App\Http\Controllers\TestController::class);
Route::get('/users', \App\Http\Controllers\UserController::class);

