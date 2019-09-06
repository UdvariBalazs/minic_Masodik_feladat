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
    public function index()
    {
        $companies = Company::all(); 

        return view('companies.show', compact('companies'));
    }

    public function show()
    {
        $companies = Company::all(); 

        return view('companies.show', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'max:255'],
            'email' => ['max:255'],
            'website' => ['max:255']
        ]);

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $timestamp = Carbon::now()->timestamp;
            $logo_name = $timestamp . '_' . $file->getClientOriginalName();
            Storage::putFileAs('public/logos', $file, $logo_name);

            Company::create([
                'name' => request('name'),
                'email' => request('email'),
                'website' => request('website'),
                'logo' => 'storage/app/public/logos/' . $logo_name
            ]);
        } else {
            Company::create(request(['name', ('email'), ('website')]));
        }

        return redirect('/companies');
    }
    
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Company $company)
    {
        if($request->hasFile('file')) {
            $file = $request->file('file');
            $timestamp = Carbon::now()->timestamp;
            $logo_name = $timestamp . '_' . $file->getClientOriginalName();
            Storage::putFileAs('public/logos', $file, $logo_name);

            $company->update([
                'name' => request('name'),
                'email' => request('email'),
                'website' => request('website'),
                'logo' => 'storage/app/public/logos/' . $logo_name
            ]);
        } else {
            $company->update(request(['name', ('email'), ('website')]));
        }

        return redirect('/companies');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/companies');
    } 
}
