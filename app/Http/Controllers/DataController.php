<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\user;

class DataController extends Controller
{
    function queries(){

        // $response = user::all();
        // $response = user::get();
        // $response = user::where('password' ,'1234' )->get();
        // $response = user::where('password' ,'1234' )->first();
        // $response = user::find(3);

        // $response = [$response];

        $response = user::where('name', 'saif')->update(['password' => '4545']);

        if($response){
            return 'data updated';
        }else{
            return 'data not updated';
        }



        
        return view('users' ,['users' => $response]);
    }
}
