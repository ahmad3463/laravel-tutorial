<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // this function is used to check the is exist or not

class UserController extends Controller
{
    // function userAbout(){
    //         return view('userabout');
    // }
    // function userControl($name){
    //         return view('control',['user'=>$name]);
    // }
    // function adminLogin(){
    //     if(View::exists('admin.signup')){
    //         return view('admin.login');
    //     }else{
    //         echo "<h1>exist not found </h1>";
    //     }
    // }

        // function userBlades(){
        //     $name = "Ahmad Khan";
        //     $user = ['ahmad','ali','khan','laravel'];
        //     return view('blades',['name' => $name , 'user' => $user]);
        // }
        function userHome(){
            return view('home');
        }

}
