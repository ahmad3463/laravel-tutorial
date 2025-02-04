<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;





Route::get('/', function () {
    return view('home');
});

Route::get('users', [MyController::class,'users']);



