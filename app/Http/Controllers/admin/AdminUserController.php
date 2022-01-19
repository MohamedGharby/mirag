<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    //

    public function delete($userId){
        $user = User::findOrFail($userId);

        $user->delete();

        return back();
    }


    public function store(Request $request){
        $request->validate([
            "name"=>"required|string|max:255",
            "email"=>"required|email|max:255",
            "password"=>"required|string|max:255",
        ]);

        $hashedPass = Hash::make($request->password);

        User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$hashedPass,
            "role_id"=> 2,
        ]);

        return back();
    }

    public function update(Request $request){
        $request->validate([
            "id"=>"required|exists:users,id",
            "name"=>"required|string|max:255",
            "email"=>"required|email|max:255",
            "password"=>"required|string|max:255",
        ]);

        User::findOrFail($request->id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
        ]);

        return back();

    }
}
