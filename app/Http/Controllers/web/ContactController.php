<?php

namespace App\Http\Controllers\web;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    //

    public function index(){
        return view("web.contact.index");
    }


    public function sendMessage(Request $request){

       $request->validate([
        "name" =>"required|string|max:255 ",
        "email"=>"required|email",
        "body"=>"required|string",
        "phone_number"=>"digits:11",
       ]);

        
         
         Contact::create([
             "name"=>$request->name,
             "email"=>$request->email,
             "body"=>$request->body,
             "phone_number"=>$request->phone_number,
         ]);

        $data = ["success"=>"تم الأرسال بنجاح"];

       return Response::json($data);

 
        
     }
}
