<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudent(){
        $students = \App\Models\Student::all();
        return view('studentdata',["datas" => $students]);
    }
}
