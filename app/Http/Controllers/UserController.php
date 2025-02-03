<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View; // this function is used to check the is exist or not

class UserController extends Controller
{

   function userAbout(){
         return view('about');
   }

   function userData(Request  $req){
      $req->validate([
         'username'=>'required | min:3 |max:15',
         'useremail'=>'required | email',
         'usercity'=>'required | uppercase',
         'skills'=>'required',
      ],
      [
        'usercity.uppercase' => 'city should be in uppercase only' 
      ]);
      return $req;
   }

}
