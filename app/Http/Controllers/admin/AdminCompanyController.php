<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Exception;
use Illuminate\Support\Facades\Auth;

class AdminCompanyController extends Controller
{
    public function index()
    {
       
        $data["companies"] = Company::select("id" , "name")->paginate(5);
        return view("admin.companies.index")->with($data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name"=>"required|string|max:255"
        ]);
        Company::create($data);
        $request->session()->flash("message" , "Company added successfully");
        return back();
    }

    public function update(Request $request)
    {
          $data = $request->validate([
            "id"=>"required|exists:companies,id",
            "name"=>"required|string|max:255",
          ]);

          Company::findOrFail($request->id)->update($data);
          $request->session()->flash("message" , "company updated successfully");
          return back();

    }

    public function delete(Company $company , Request $request)
    {
        try {
           $company->delete();
           $request->session()->flash("message" , "Company deleted successfully");
        } catch (Exception $e) {
            $request->session()->flash("canNotDelete" , "can't be deleted delete it's investments first");
        }
           return back();
    }
}
