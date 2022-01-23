<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Support\Facades\Auth;

class AdminExpertController extends Controller
{
    public function index()
    {
     
        $data["experts"] = Expert::paginate(10);
        return view("admin.experts.index")->with($data);
    }
}
