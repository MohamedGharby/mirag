<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\InvestmentImg;
use Illuminate\Support\Facades\Auth;
use App\Helper\Helper;
use Illuminate\Support\Facades\Storage;

class AdminInvestmentImgsController extends Controller
{
    public function show($investId)
    {
        $superRoleName = Role::where("name" , "superadmin")->first();
        $data['role_id'] =  $superRoleName->id;
        $data['user'] = Auth::user();
        $data['imgs'] = InvestmentImg::where('investment_id' , $investId)->paginate(9);
        $data['invest']= Investment::select("project_name" , "id")->where('id' , $investId)->first();
        return view("admin.investment-imgs.show")->with($data);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|image|mimes:jpg,png,jpeg',
            'investment_id' => 'required|exists:investments,id'
        ]);

        $path = Helper::uploadImage("public/investments" , $data["name"]);
        //$path = Storage::putFile("public/projects" , $data['name']);
        $data['name']= $path;
        InvestmentImg::create($data);

        $request->session()->flash("message" , "Image added successfully");
        return back();
    }


    public function delete($investImgsId , Request $request)
    {
        $InvestImg = InvestmentImg::findOrFail($investImgsId);
        $InvestImg->delete();
        Storage::delete($InvestImg->name);
        $request->session()->flash("message" , "Image deleted successfully");
        return back();
    }
}
