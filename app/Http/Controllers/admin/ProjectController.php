<?php

namespace App\Http\Controllers\admin;

use App\Helper\Helper;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(Request $request){

        if ($request->search) {
           $data['projects'] = Project::where("title" , "like" , "%". $request->search .'%')->paginate(10);
           return view("admin.projects.index")->with($data);
        }

        $data['projects'] = Project::select('id' , 'title' , 'best' ,'img' , 'updated_at')->orderBy('best' , 'DESC')->paginate(10);
        return view("admin.projects.index")->with($data);
    }

    public function create()
    {

        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'desc' => 'required|string',
            'location' => 'required|string',
            'year' => 'required|digits:4',
            'surface_area' => 'required|numeric',
            'img' => 'required|image|mimes:jpg,png,jpeg',
            'best' => 'nullable'
        ]);




        $best = 0;
        if ($request->best == "on") {
            $best=1;
        }else{
            $best = 0;
        }

        $data['best'] = $best;

         if ($request->hasFile("img")) {
            $path = Helper::uploadImage($request , 'img' , "uploads/projects");
            // $path = Storage::putFile("public/projects" , $data['img']);

             $data['img']= $path;
         }


        Project::create($data);

        $request->session()->flash("message" , "Project added successfully");
        return back();
    }


    public function edit(Project $project)
    {

        $data['project'] = $project;
        return view('admin.projects.edit')->with($data);
    }



    public function update(Request $request , Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'client' => 'required|string|max:255',
            'desc' => 'required|string',
            'location' => 'required|string',
            'year' => 'required|digits:4',
            'surface_area' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('img')) {
            Storage::delete($project->img);
            $path =Helper::uploadImage($request , 'img' , 'uploads/projects');
            //$path = Storage::putFile("public/projects" , $data['img']);


            $data['img']= $path;
        }


        $project->update($data);

        $request->session()->flash("message" , "Project updated successfully");
        return redirect(url("dashboard/projects"));
    }

    public function bestToggle(Project $project)
    {
        $project->update([
            'best' => ! $project->best
        ]);
        return back();
    }

    public function delete(Request $request , Project $project)
    {
        try {
            Storage::delete($project->img);
            $project->delete();
            $request->session()->flash("message" , "Project deleted successfully");
        } catch (Exception $e) {
            $request->session()->flash("canNotDelete" , "Project can't deleted, You must delete the project images first");
        };
        return back();
    }


}
