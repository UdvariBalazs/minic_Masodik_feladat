<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Company;

class EmployeesController extends Controller
{
    public function table()
    {
        $employees = Employee::all();
        
        $companies = Company::all();

        return view('employees.table', compact('employees', 'companies'));
    }

    public function create()
    {
        $companies = Company::all();

        return view('employees.create', compact('companies'));
    }

    public function store()
    {
        $employee = new Employee();

        $employee->first_name = request('first_name');
        $employee->last_name = request('last_name');
        $employee->email = request('email');
        $employee->phone = request('phone');
        $employee->company = request('company');

        $employee->save();

        return redirect('/employees');
    }
}
