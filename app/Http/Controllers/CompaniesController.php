<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function companies()
    {
        return view('companies.companies');
    }
}
