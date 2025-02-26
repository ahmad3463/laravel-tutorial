<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CollageController extends Controller
{
    function collage(Request  $req){
        $student = new Student();
        $student->name=$req->name;
        $student->email=$req->email;
        $student->phone=$req->phone;
        $student->save();

        if($student){
            return redirect('list');
        }else{
            echo " operation failed";
        }
    }

    function list(){

         $studentData = Student::all();

        return view('list_student', ['students' => $studentData]);
    }


    function delete($id){
         $isDeleted = Student::destroy($id);

         if($isDeleted){
            return redirect('list',); 
         }

    }

    function edit($id){
        $student = Student::find($id);
        return view('edit' , ['data'=>$student]);
    }

    function editStudent(Request $req, $id ){
     $student = Student::find($id);
     $student->name = $req->name;
     $student->email = $req->email;
     $student->phone = $req->phone; 
        if($student->save()){
            return redirect('list');
        } else{
            return "update operation failed";
        }
    }
}
