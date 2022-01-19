<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class AdminMessagesController extends Controller
{
    public function index(){
        $superRoleName = Role::where("name" , "superadmin")->first();
        $data['role_id'] =  $superRoleName->id;
        $data['user'] = Auth::user();
        $data["messages"] = Contact::select("id" , "name" , "email" , "body")->get();
        return view("admin.messages.index")->with($data);
    }

    public function show($msgId)
    {
        $superRoleName = Role::where("name" , "superadmin")->first();
        $data['role_id'] =  $superRoleName->id;
        $data['user'] = Auth::user();
        $data["message"] = Contact::findOrFail($msgId);
        return view("admin.messages.show")->with($data);
    }


    public function delete($msgId , Request $request){
        $message = Contact::findOrFail($msgId);

        $message->delete();

        $request->session()->flash("message" , "Message deleted successfully");

        return back();
    }


}
