<?php

use app\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});


Route::get('/users', [UserController::class,'index']);