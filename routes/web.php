<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/home', function () {
//     return view('home');
// });


 

Route::view('/control','control');
// // Route::view('/userabout','userabout');
// Route::get('/userabout/{name}', function($name){
//     return view('userabout',['user'=>$name]);
// });
// Route::view('/login','admin.login');


// Route::get('about_user',[ UserController::class,'userAbout']);
// // Route::get('user_control/{name}',[ UserController::class,'userControl']);

// Route::get('adminlogin',[UserController::class,'adminLogin']);


Route::get('blades' ,[UserController::class,'userBlades']);
Route::get('home' ,[UserController::class,'userHome']);


