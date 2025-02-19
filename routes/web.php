<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MyController;
// use  App\Http\Controllers\StudentController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\DataController;
// use App\Http\Controllers\HttpController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\AddUserController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('home');
});

// Route::view('users' , 'users');
// Route::get('users', [MyController::class,'users']);

// Route::get('student',[StudentController::class,'getStudent']);
// Route::view('students' ,'studentdata');

// Route::view('users' , 'aboutuser');




// Route::get('users',[UserController::class,'users']);

// Route::get('data' , [DataController::class,'Data']);

// Route::get('query' ,[DataController::class,'queries']);


// Route::view('htrequest' , ('httprequest'));
// Route::post('user', [HttpController::class,'login']);


// Route::view('login','loginpage'); 
// Route::view('profile','profile'); 


// Route::post('user' , [LoginController::class,'login']);
// Route::get('logout' , [LoginController::class,'logout']);

// Route::view('adduser' , 'adduser');

// Route::post('user' , [AddUserController::class,'login']);


// Route::view('upload' , 'upload');


// Route::post('loaded',[UploadController::class,'upload']);

Route::view('local' , 'localiszation');








