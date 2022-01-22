<?php

namespace App\Http\Controllers\admin;

use App\Helper\Helper;
use App\Models\Role;
use App\Models\Latest;
use App\Models\LatestImg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminLatestImagesController extends Controller
{
    public function show($latestId)
    {
        $superRoleName = Role::where("name" , "superadmin")->first();
        $data['role_id'] =  $superRoleName->id;
        $data['user'] = Auth::user();
        $data['imgs'] = LatestImg::where('latest_id' , $latestId)->paginate(9);
        $data['latest']= Latest::select("title" , "id")->where('id' , $latestId)->first();
        return view("admin.latest-imgs.show")->with($data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|image|mimes:jpg,png,jpeg',
            'latest_id' => 'required|exists:latests,id'
        ]);

        $path = Helper::uploadImage("public/latests" , $data["name"]);
       // $path = Storage::putFile("public/latests" , $data['name']);
        $data['name']= $path;
        LatestImg::create($data);

        $request->session()->flash("message" , "Image added successfully");
        return back();
    }


    public function delete($latestImgsId , Request $request)
    {
        $LatesImg = LatestImg::findOrFail($latestImgsId);
        $LatesImg->delete();
        Storage::delete($LatesImg->name);
        $request->session()->flash("message" , "Image deleted successfully");
        return back();
    }
}
