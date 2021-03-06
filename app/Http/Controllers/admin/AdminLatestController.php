<?php

namespace App\Http\Controllers\admin;

use App\Helper\Helper;
use Exception;
use App\Models\Role;
use App\Models\Latest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminLatestController extends Controller
{
    public function index()
    {

        $data["latests"] = Latest::select("id" , "title" , "main_img")->paginate(5);
        return view("admin.latest.index")->with($data);
    }

    public function create(Request $request){


        return view("admin.latest.create");
    }

    public function delete(Request $request , Latest $latest)
    {
        try {
            Storage::delete($latest->main_img);
            $latest->delete();
            $request->session()->flash("message" , "new deleted successfully");
        } catch (Exception $e) {
            $request->session()->flash("canNotDelete" , "new can't deleted, You must delete the news images first");
        };
        return back();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'main_img' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $path = Helper::uploadImage($request , "main_img" , 'uploads/latests');
       // $path = Storage::putFile("public/latests" , $data['main_img']);


        $data['main_img']= $path;

        Latest::create($data);

        $request->session()->flash("message" , "News added successfully");
        return back();
    }

    public function edit(Latest $latest)
    {
        $superRoleName = Role::where("name" , "superadmin")->first();
        $data['role_id'] =  $superRoleName->id;
        $data['user'] = Auth::user();
        $data['latests'] = $latest;
        return view('admin.latest.edit')->with($data);
    }

    public function update(Request $request , Latest $latest){
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'main_img' => 'nullable|image|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('main_img')) {
            Storage::delete($latest->img);
            $path = Helper::uploadImage($request , "main_img" , 'uploads/latests');
            //$path = Storage::putFile("public/latests" , $data['main_img']);


            $data['main_img'] = $path;
        }



        $latest->update($data);

        $request->session()->flash("message" , "news updated successfully");
        return redirect(url("dashboard/news"));

        }




}
