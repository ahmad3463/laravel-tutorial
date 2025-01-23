<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;//we can check this and find this path through Controller spacename

Route::get('/home', function () {
    return view('home');
});


// Route::view('/home','home'); here is a short method to open with routes


Route::get('/about/{name}', function($name) {
    // echo $name;
    return view('about', ['name'=>$name]);
});


// Route::redirect('/about','/');the redirect method
Route::get('user',[UserController::class,'getUser']); 
Route::get('user/{name}',[UserController::class,'getUserData']); 



