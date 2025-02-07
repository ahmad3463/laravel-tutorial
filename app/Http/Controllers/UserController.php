<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //

    function users(){
        $reponse = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response = $reponse->body();
        return view('aboutuser' ,['data' => json_decode($response)]);


    }
}
