<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImagesController extends Controller
{
    function upload(Request $req){
        $path = $req->file("file")->store('public');
        $pathArray = explode('/',$path);
        $imgPath = $pathArray[1];
        $img = new Image();
        $img->path=$imgPath;
        if ($img->save()){
            return redirect('list');
        }else{
            return 'img not found';
        }
    }

    function list(){
        $image = Image::all();
        return view('imgdisplay',['imgData'=> $image]);
    }
}
