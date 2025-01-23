<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "<h1>Your Code Run Successfully!</h1>";
    }
    function getUserData($name){
        return "<h1>Hello user name is $name</h1>";
    }
}
