<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MyController;
// use  App\Http\Controllers\StudentController;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Route::view('users' , 'users');
// Route::get('users', [MyController::class,'users']);

// Route::get('student',[StudentController::class,'getStudent']);
// Route::view('students' ,'studentdata');

// Route::view('users' , 'aboutuser');


Route::get('users',[UserController::class,'users']);




