<?php

namespace App\Http\Controllers\web;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    //

    public function index(){
        return view("web.contact.index");
    }


    public function sendMessage(Request $request){

       $validator= Validator::make( $request->all() ,[
            "name" =>"required|string|max:255 ",
            "email"=>"required|email",
            "body"=>"required|string",
            "phone_number"=>"digits:11",
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect(url('/contact'))->withErrors($errors);
        }
         
         Contact::create([
             "name"=>$request->name,
             "email"=>$request->email,
             "body"=>$request->body,
             "phone_number"=>$request->phone_number,
         ]);

         $request->session()->put("success" , "تم الارسال بنجاح");

        return back();

 
        
     }
}
