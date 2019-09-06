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

        return redirect('/employees');
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();

        return view('employees.edit', compact('companies', 'employee'));
    }

    public function update(Employee $employee)
    {
        request()->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['max:255'],
            'phone'=> ['max:255']
        ]);

        $employee->update(request(['first_name', 'last_name', 'email', 'phone', 'company']));

        return redirect('/employees');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect('/employees');
    }
}
