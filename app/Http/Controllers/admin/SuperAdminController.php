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

        $data['users'] = User::select('id' , 'name' ,'email','role_id')->paginate(10);
        return view("admin.users.index")->with($data);
    }
}
