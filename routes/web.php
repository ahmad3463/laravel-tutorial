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
// use App\Http\Controllers\UploadController;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\Session;
// use App\Http\Controllers\AddUserController;
// use App\Http\Controllers\AddDataController;
// use App\Http\Controllers\CollageController;
use App\Http\Controllers\ImagesController;

use function Pest\Laravel\post;

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


// Route::get('local/{lang}',function($lang){
//     App::setLocale($lang);
//     return  view('localiszation');
// });




// Route::middleware('setLang')->group(function(){
//     Route::view('local' , 'localiszation');

//     Route::get('setlang/{lang}', function($lang){
//         Session::put('langName', $lang);
//             return  redirect('local');
//     });
// });


// Route::view('collage' , 'collage');

// Route::post('collage' , [CollageController::class,'collage']);

// Route::get('list' , [CollageController::class,'list']);

// Route::get('delete/{id}' , [CollageController::class,'delete']);

// Route::get('edit/{id}' , [CollageController::class,'edit']);

// Route::put('edit-student/{id}',[CollageController::class,'editStudent']);

// Route::get('search' , [CollageController::class,'search']);

// Route::post('delete-multi' , [CollageController::class,'deleteMulti']);

Route::view('upload' , 'imgupload');

Route::post('upload' , [ImagesController::class,'upload']);
Route::get('list' , [ImagesController::class,'list']);