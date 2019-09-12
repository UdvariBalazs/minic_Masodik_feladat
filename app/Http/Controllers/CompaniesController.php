<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use App\Employee;

use Validator,Redirect,Response,File;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10); 

        return view('companies.show', compact('companies'));
    }

    public function show()
    {
        $companies = Company::paginate(10); 

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

        return redirect(app()->getLocale() . '/companies');
    }
    
    public function edit($locale, $id)
    {
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $locale, $id)
    {
        $company = Company::findOrFail($id);
        
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
            $company->update(request(['name', 'email', 'website']));
        }

        return redirect(app()->getLocale() . '/companies');
    }

    public function destroy($locale, $id)
    {
        $employees = Employee::all(); 
        foreach ($employees as $employee)
        {
            if ($employee->company == $id) 
            {
                $employee->update([
                    'company' => null
                ]);
            }
        }

        $company = Company::findOrFail($id);
        $company->delete();

        return redirect(app()->getLocale() . '/companies');
    } 
}
