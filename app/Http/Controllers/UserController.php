<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View; // this function is used to check the is exist or not

class UserController extends Controller
{
   function userData(Request $userdata){
      return $userdata;
   }

}
