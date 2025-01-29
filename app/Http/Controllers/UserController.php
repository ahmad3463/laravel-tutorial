<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\View; // this function is used to check the is exist or not

class UserController extends Controller
{
   function addUser(Request $req){

    echo "user name is : $req->username";
    echo "<br>";    
    echo "user email is : $req->useremail";    
    echo "<br>";    
    echo "user city is : $req->usercity";

   }
   

}
