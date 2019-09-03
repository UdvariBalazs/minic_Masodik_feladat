<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\Company;

class EmployeesController extends Controller
{
    public function employees()
    {
        $employees = Employee::all();
        
        $companies = Company::all();

        return view('employees.employees', compact('employees', 'companies'));
    }
}
