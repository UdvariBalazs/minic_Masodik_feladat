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
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/create', 'CompaniesController@create');

Route::get('/employees', 'EmployeesController@table');
Route::post('/employees', 'EmployeesController@store');
Route::get('/employees/create', 'EmployeesController@create');



