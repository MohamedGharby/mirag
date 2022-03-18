<?php

namespace App\Http\Controllers\admin;

use App\Helper\Helper;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Expert;
use App\Models\ExpertSocialWebsite;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminExpertController extends Controller
{
    public function index(){

        $data["experts"] = Expert::paginate(10);
        return view("admin.experts.index")->with($data);
    }

    public function store(Request $request){
         $data = $request->validate([
              "name" => "required|string|max:50",
              "title" =>"required|string|max:255",
              'img' => 'nullable|image|mimes:jpg,png,jpeg',
         ]);


        if ($request->hasFile("img")) {
            $path = Helper::uploadImage( $request , "img" ,'uploads/experts' );
            $data["img"] = $path;

             Expert::create($data);
        }else{
            $data["img"] = null;
            Expert::create($data);
        }



    // Helper::magic("C:/xampp/htdocs/mirag2/mirag/storage/app/public/experts" , "C:\xampp\htdocs\mirag2\mirag\public\storage2");


         return back();
    }

    public function delete(Expert $expert , Request $request){
        $socials = $expert->socialMedia;
        foreach ($socials as $social){
           $social->delete();
        };

        Storage::delete($expert->img);
        $expert->delete();
        $request->session()->flash("message" , "expert Deleted successfully");
        return back();

    }

    public function update(Request $request){

         $request->validate([
              "id" => "required|exists:experts,id",
              "name" =>"required|string|max:255",
              "title" =>"required|string|max:255",
              'img' => 'nullable|image|mimes:jpg,png,jpeg',
              "facebook" => "nullable|url",
              "instagram"=>"nullable|url",
              "twitter" => "nullable|url",
              "gmail" =>"nullable|email",
              "linkedin"=>"nullable|url",
          ]);



          $expert = Expert::findOrFail($request->id);
           $socials = $expert->socialMedia;

           if (count($socials) > 0) {

            foreach($socials as $social){
                $social->update([
                    "expert_id"=>$request->id,
                    "facebook" => $request->facebook,
                    "instagram" => $request->instagram,
                    "twitter" => $request->twitter,
                    "gmail" =>$request->gmail,
                    "linkedin"=>$request->linkedin,
                ]);
            }
           }else{
              ExpertSocialWebsite::create([
                "expert_id"=>$request->id,
                "facebook" => $request->facebook,
                "instagram" => $request->instagram,
                "twitter" => $request->twitter,
                "gmail" =>$request->gmail,
                "linkedin"=>$request->linkedin,
              ]);
            }


           if ($request->hasFile("img")) {
               Storage::delete($expert->img);
               $path = Helper::uploadImage( $request , "img" ,'uploads/experts' );
               $expert->update([
                "id"=>$request->id,
                "name"=>$request->name,
                "title"=>$request->title,
                "img" =>$path,
            ]);
           }else{
            $request->img = null;
            $expert->update([
                "id"=>$request->id,
                "name"=>$request->name,
                "title"=>$request->title,
                "img" =>$request->img,
            ]);

           }

           $request->session()->flash("message" , "expert updated suxxessfully");

           return back();


    }

    public function addSocial(Request $request)
    {
        $data = $request->validate([
            "expert_id" =>"exists:experts,id",
            "facebook" => "nullable|url",
            "instagram"=>"nullable|url",
            "twitter" => "nullable|url",
            "gmail" =>"nullable|email",
            "linkedin"=>"nullable|url",
        ]);

        ExpertSocialWebsite::create($data);
        $request->session()->flash("message" , "socials created successfully");
        return back();


    }
}
