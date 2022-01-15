<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('web.about.index');
    }


   
}
