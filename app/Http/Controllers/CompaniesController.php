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
