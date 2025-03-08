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
        return $img->save();
    }
}
