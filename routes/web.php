<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('home', [UserController::class,'userHome']);





