<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Validator,Redirect,Response,File;

class CompaniesController extends Controller
{
    public function table()
    {
        $companies = Company::all(); 

        return view('companies.table', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function fileUpload(Request $request) {
        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/storage/app/public/logos');
            $image->move($destinationPath, $name);
            $this->save();
    
            return back()->with('success','Image Upload successfully');
        }
    }

    public function store(Request $request)
    {
        $company = new Company();

        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');
        $company->logo = request('logo');
        $company->save();

        return redirect('/companies');
    }
}
