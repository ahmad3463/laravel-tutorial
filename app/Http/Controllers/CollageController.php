<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collage;

class CollageController extends Controller
{
    function collage(Request  $req){
        $student = new Collage();
        $student->name=$req->name;
        $student->email=$req->email;
        $student->phone=$req->phone;
        $student->save();

        if($student){
            echo " student has been added";
        }else{
            echo " operation failed";
        }
    }
}
