<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Investment;
use Exception;
use Illuminate\Support\Facades\Auth;

class AdminInvestmentsController extends Controller
{
    public function index($companyId)
    {
        
        $data["invests"] = Investment::select("id" , "project_name" , "desc")->where("company_id" , $companyId)->paginate(5);
        $data["company"] = Company::select("id" , "name")->where("id" , $companyId)->first();
        return view("admin.investments.index")->with($data);
    }

    public function store(Request $request){
        $data = $request->validate([
            'project_name' => 'required|string|max:255',
            "desc" => 'required|string',
            'company_id' => 'required|exists:companies,id'
        ]);

        Investment::create($data);
        $request->session()->flash("message" , "investement added successfully");
        return back();
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'project_name' => 'required|string|max:255',
            "desc" => 'required|string',
            'id' => 'required|exists:investments,id'
        ]);

         $invest = Investment::findOrFail($request->id);
         $invest->update($data);
        $request->session()->flash("message" , "investment updated successfully");
        return back();

    }

    public function delete(Request $request ,Investment $investment)
    {
        try {
            $investment->delete();
              $request->session()->flash("message" , "investment deleted successfully");
        } catch (Exception $e) {
            $request->session()->flash('canNotDelete' , "can't delete investment delete imgages first");
        }
        return back();


    }
}


