<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniStudent;

class AddDataController extends Controller
{
    function student(Request $req){
     $student = new UniStudent();
        $student->name=$req->name;
        $student->email=$req->email;
        $student->phone=$req->phone;
        $student->save();

        if($student){
            return "student record has been added";
        }else{
            return "operation failed";
        }

    }
}
