<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

       $data["bestProjects"] = Project::select("title" , "id" , "img" , "desc")->where("best" , 1)->get();
       return view("web.home.index")->with($data);
    }
}
