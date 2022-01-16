<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function index(){

        $data['projects'] = Project::select("title" ,"desc"  ,"img" , "id" )->paginate(8);

        
        
        return view('web.projects.index')->with($data);
    }

    public function show($projectId)
    {
        $data['project'] = Project::findOrFail($projectId);

        return view('web.projects.show')->with($data);
    }
}
