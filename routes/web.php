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

use App\Faculty;

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/departments/{id}', 'FacultyController@getDepartmentsByFacultyId')->name('departments');
Route::get('/students/{id}', 'departmentController@getStudentsByDepartmentId')->name('students');
Route::get('/studentInfo/{id}', 'StudentController@getById');
Route::get('/parseCountries', 'CountryController@parseCountriesFile');
Route::get('/parseRegions', 'ServiceController@parseRegionsFile');
Route::get('/parseStudents', 'StudentController@parse');
Route::get('/parseRegionsProvinciesCitiesFile', 'ServiceController@parseRegionsProvinciesCitiesFile');
Route::get('/admin', function() {
  return view('admin/dashboard');
});
