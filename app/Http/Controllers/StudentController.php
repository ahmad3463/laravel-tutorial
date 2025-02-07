<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudent(){
        $data = new \App\Models\Student;
        echo $data->dumFun();
        $students = \App\Models\Student::all();
        return view('studentdata',["datas" => $students]);
    }
}
