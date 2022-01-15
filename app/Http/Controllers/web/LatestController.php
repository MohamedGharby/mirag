<?php

namespace App\Http\Controllers\web;

use App\Models\Latest;
use App\Models\LatestImg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LatestController extends Controller
{
    public function index()
    {
        $data['latests'] = Latest::orderBy('id' , 'DESC')->paginate(3);
        return view('web.latest.index')->with($data);
    }

    public function show($latestId)
    {
        $data['news'] = Latest::orderBy('id' , 'DESC')->limit(6)->get();
        $data['latest'] = Latest::findOrFail($latestId);
        $data['latestImg'] = LatestImg::findOrFail($latestId);
        
        return view('web.latest.show')->with($data);
    }
}
