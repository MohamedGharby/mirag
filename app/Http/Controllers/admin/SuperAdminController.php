<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SuperAdminController extends Controller
{
    public function index()
    {
        $superRoleName = Role::where("name" , "superadmin")->first();
        $data['roles'] = Role::select("name" , "id")->get();
        $data['role_id'] =  $superRoleName->id;
        $data['user'] = Auth::user();
        $data['users'] = User::select('id' , 'name' ,'email','role_id')->get();
        return view("admin.users.index")->with($data);
    }
}
