<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index(){
        $superRoleName = Role::where("name" , "superadmin")->first();
        $role_id = $superRoleName->id;
        $user = Auth::user();
        return view("admin.home.index")->with([
            "role_id"=>$role_id,
            "user" => $user,
        ]);
    }
}
