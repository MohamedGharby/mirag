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

        if ($request->hasFile("name")) {
            $path = Helper::uploadImage($request , "name" , "uploads/projectImgs");
             //$path = Storage::putFile("public/projects" , $data['name']);

                 $data['name']= $path;
        }


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
    public function MakeMain(Request $request , $image , $projectId)
    {
        //grab the two images
        $project = Project::findOrFail($projectId);
        $mainImg = $project->img;
        $image = ProjectImg::findOrFail($image);
        $imgName = $image->name;

        //swapping imgs

        $project->update([
          "img" => $imgName
        ]);

        $image->update([
            "name" => $mainImg
        ]);

        $request->session()->flash("message" , "Image maked main successfully");

        return back();

    }
}
