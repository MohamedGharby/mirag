<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use App\Models\ExpertSocialWebsite;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $data["experts"] = Expert::select("id" , "name" , "title" , "img")->get();
        $data["socialMedia"] = ExpertSocialWebsite::get();
        return view("web.team.index")->with($data);
    }
}
