<?php

namespace App\Http\Controllers\admin;

use App\Helper\Helper;
use App\Models\Role;
use App\Models\Project;
use App\Models\ProjectImg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectImagesController extends Controller
{
    public function show($projectId)
    {
       
        $data['imgs'] = ProjectImg::where('project_id' , $projectId)->paginate(9);
        $data['project']= Project::select("title" , "id")->where('id' , $projectId)->first();
        return view("admin.project-imgs.show")->with($data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|image|mimes:jpg,png,jpeg',
            'project_id' => 'required|exists:projects,id'
        ]);

        $path = Helper::uploadImage("public/projects" , $data["img"]);
        //$path = Storage::putFile("public/projects" , $data['name']);
        $data['name']= $path;
        ProjectImg::create($data);

        $request->session()->flash("message" , "Image added successfully");
        return back();
    }

    public function delete($projectImgsId , Request $request)
    {
        $prImg = ProjectImg::findOrFail($projectImgsId);
        $prImg->delete();
        Storage::delete($prImg->name);
        $request->session()->flash("message" , "Image deleted successfully");
        return back();
    }
}
