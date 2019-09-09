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
	Route::post('/home/employee/created', 'EmployeeController@store')->name('Employee.store');
	Route::get('/home/employee/edit/{slug}', 'EmployeeController@edit')->name('Employee.edit');
	Route::put('/home/employee/{slug}/update', 'EmployeeController@update')->name('Employee.update');
	Route::put('/home/employee/job/{id}/update', 'EmployeeController@update_job')->name('Employee.update.job');
	Route::delete('/home/employee/{slug}/deleted', 'EmployeeController@destroy')->name('Employee.destroy');

	//Jobs
	Route::get('/home/employee/{slug}/new/job', 'JobController@create')->name('Job.create');
	Route::post('/home/employee/{slug}/new/job/added', 'JobController@store')->name('Job.store');
	Route::delete('/home/employee/job/{id}/deleted', 'JobController@destroy')->name('Job.destroy');

});
