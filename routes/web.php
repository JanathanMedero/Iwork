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
    return view('welcome');
});

Auth::routes(["register" => false]);

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home');

	//Employees
	Route::get('/home/new-employee', 'EmployeeController@create')->name('Employee.create');
	Route::get('/home/employees', 'EmployeeController@index')->name('Employee.index');
	Route::post('/home/employe/created', 'EmployeeController@store')->name('Employee.store');

});
