<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View; // this function is used to check the is exist or not

class UserController extends Controller
{
   function userData(Request  $req){
      $req->validate([
         'username'=>'required | min:3 |max:15',
         'useremail'=>'required | email',
         'usercity'=>'required | min:4 | max:10',
         'skills'=>'required',
      ]);
      return $req;
   }

}
