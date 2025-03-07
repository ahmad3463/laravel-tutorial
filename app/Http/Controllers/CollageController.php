<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

use function Pest\Laravel\get;

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

         $studentData = Student::paginate(8);
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


    function search(Request $req){
     $studentData = Student::where('name' , 'like',"%$req->search%")->get();
     return view('list_student',['students' =>$studentData,'search'=>$req->search]);
    }

  function  deleteMulti(Request $req){
       $result = Student::destroy( $req->ids);
    if($result){

        return redirect('list');
    }else{
        return "Student Data not deleted";
    }
  }
}
