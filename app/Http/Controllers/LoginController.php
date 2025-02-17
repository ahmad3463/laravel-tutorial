<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request  $req){

        $req->session()->put('username' ,$req->input('name'));
        // echo session('username');
        return  redirect('profile');
    }

    function logout(){
        session()->pull('username');
        return  redirect('profile');
    }
}
