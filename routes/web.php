<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('about',[UserController::class,'userAbout']);

Route::post('form-data',[UserController::class,'userData']);


