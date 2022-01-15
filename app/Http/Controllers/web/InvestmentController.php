<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index(Investment $investment)
    {
        $data["companies"] = Company::select("id" , "name")->get();
       $companyId = Company::select('id')->first()->id;
        $data["invests"] = Investment::orderBy('id' , 'DESC')->where("company_id" , $companyId)->get();
        return view('web.investments.index')->with($data);
    }
}
