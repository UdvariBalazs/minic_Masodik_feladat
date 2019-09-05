<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Validator,Redirect,Response,File;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

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

    public function store(Request $request)
    {
        $company = new Company();

        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $company->logo = $file;

            $timestamp = Carbon::now()->timestamp;
            $logo_name = $timestamp . '_' . $company->logo->getClientOriginalName();
            Storage::putFileAs('public/logos', $company->logo, $logo_name);

            $company->logo = 'storage/app/public/logos/' . $logo_name;
        }
        
        $company->save();

        return redirect('/companies');
    }
    
    public function edit($id)
    {
        $company = Company::find($id);

        return view('companies.edit', compact('company'));
    }

    public function update()
    {
        $company = Company::find($id);

        $company->name = request('name');
        $company->email = request('email');
        $company->website = request('website');
        $company->logo = request('logo');

        $company->save();

        return redirect('/companies');
    }

    public function destroy()
    {
        Company::find($id)->delete();

        return redirect('/companies');
    } 
}
