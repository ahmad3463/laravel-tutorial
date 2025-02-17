<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
   function login(Request $req){
    // return $req;

        echo "Request method is ". $req->method();
        echo "<br>";
        echo "Request method is ". $req->path();
        echo "<br>";
        echo "Request url is ". $req->url();
        echo "<br>";
        echo "user name is ". $req->input('name');
        echo "<br>";
        echo "user password is ". $req->password;
        echo "<br>";


        if($req->isMethod('post')){
            echo "excude code for post request";
        }else{
            echo "exude code for other request";
        }
   }
}
