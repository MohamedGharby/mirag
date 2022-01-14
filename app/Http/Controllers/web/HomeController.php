<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use App\Models\Latest;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

       $data["bestProjects"] = Project::select("title" , "id" , "img" , "desc")->where("best" , 1)->get();
       $data["experts"] = Expert::limit(3)->get();
       $data["latests"] = Latest::orderBy('id' , 'DESC')->limit(3)->get();
       return view("web.home.index")->with($data);
    }
}
