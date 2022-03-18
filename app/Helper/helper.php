<?php

namespace App\Helper;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class Helper{

    public static function uploadImage(Request $request , $rvn , $path){

       //$fileName = Storage::putFile($extension , $file);
       //return $fileName;
       $file = $request->file($rvn);
       $name = md5(time()) . '.' . $file->getClientOriginalExtension();
       $imageName =$file->move(public_path($path),$name);
       return $imageName->getFilename();
    }




}
