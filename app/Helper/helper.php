<?php

namespace App\Helper;

use Illuminate\Support\Facades\Storage;

class Helper{

    public static function uploadImage($extension , $file){

       $fileName = Storage::putFile($extension , $file);
       return $fileName;
    }
}
