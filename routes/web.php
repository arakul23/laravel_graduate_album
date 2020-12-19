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

Route::get('/', function () {
    $faculties = Faculty::all();
    return view('index', ["faculties" => $faculties]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/departments/{id}', 'DepartmentController@getByFacultyId');
Route::get('/students/{id}', 'StudentController@getByDepartmentId');
Route::get('/studentInfo/{id}', 'StudentController@getById');
Route::get('/parseCountries', 'CountryController@parseCountriesFile');
Route::get('/parseRegions', 'ServiceController@parseRegionsFile');
Route::get('/parseRegionsProvinciesCitiesFile', 'ServiceController@parseRegionsProvinciesCitiesFile');
Route::get('/admin', function() {
  return view('admin/dashboard');
});

Route::view('/portfolio', 'portfolio');
