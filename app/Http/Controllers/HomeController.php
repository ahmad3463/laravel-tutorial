<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function show(){
        return "student list";
    }

    function hide(){
        return "student list hidden";
    }
    function clear(){
        return "student list clear";
    }

    function about($name){

        return $name;
    }
}
