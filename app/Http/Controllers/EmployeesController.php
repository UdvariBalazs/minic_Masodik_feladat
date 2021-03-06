<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Company;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10); 
        $companies = Company::all();

        return view('employees.show', compact('employees', 'companies'));
    }

    public function show()
    {
        $employees = Employee::paginate(10); 
        $companies = Company::all();

        return view('employees.show', compact('employees', 'companies'));
    }

    public function create()
    {
        $companies = Company::all();

        return view('employees.create', compact('companies'));
    }

    public function store()
    {
        request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['max:255'],
            'phone'=> ['max:255']
        ]);

        Employee::create(request(['first_name', 'last_name', 'email', 'phone', 'company']));

        return redirect(app()->getLocale() . '/employees');
    }

    public function edit($locale, $id)
    {
        $employee = Employee::findOrFail($id);
        $companies = Company::all();

        return view('employees.edit', compact('companies', 'employee'));
    }

    public function update($locale, $id)
    {
        $employee = Employee::findOrFail($id);
        
        request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['max:255'],
            'phone'=> ['max:255']
        ]);

        $employee->update(request(['first_name', 'last_name', 'email', 'phone', 'company']));
            
        return redirect(app()->getLocale() . '/employees');
    }

    public function destroy($locale, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect(app()->getLocale() . '/employees');
    }
}
