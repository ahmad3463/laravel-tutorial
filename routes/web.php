<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::view('/userhome','home');

Route::post('user-form', [UserController::class,'userData']);




