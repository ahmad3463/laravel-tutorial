<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;





Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('student')->group( function(){
//     Route::view('/home','home');
//     Route::get('/show',[HomeController::class,'show']);
//     Route::get('/add',[HomeController::class,'hide']);
// })




Route::controller(HomeController::class)->group(function () {

    Route::get('show',  'show');
    Route::get('hide',  'hide');
    Route::get('clear', 'clear');
    Route::get('about/{name}','about');

});

