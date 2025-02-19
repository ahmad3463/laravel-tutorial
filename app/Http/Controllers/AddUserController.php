<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddUserController extends Controller
{
    function login(Request $req){

        $req->session::flash('message','user has been added successfully');
       return redirect('adduser');
    }
}
