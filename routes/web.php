<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::view('/home','home');

Route::post('form-data',[UserController::class,'userData']);


