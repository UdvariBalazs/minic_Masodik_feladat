<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class CompaniesController extends Controller
{
    public function companies()
    {
        $companies = Company::all(); 

        return view('companies.companies', compact('companies'));
    }
}
