<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/companies', 'CompaniesController@table');
Route::get('/companies/create', 'CompaniesController@create');
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/{company}/edit', 'CompaniesController@edit');
Route::patch('/companies/{company}', 'CompaniesController@update');
Route::delete('/companies/{company}', 'CompaniesController@destroy');

Route::get('/employees', 'EmployeesController@table');
Route::get('/employees/create', 'EmployeesController@create');
Route::post('/employees', 'EmployeesController@store');
Route::get('/employees/{employee}/edit', 'EmployeesController@edit');
Route::patch('/employees/{employee}', 'EmployeesController@update');
Route::delete('/employees/{employee}', 'EmployeesController@destroy');



