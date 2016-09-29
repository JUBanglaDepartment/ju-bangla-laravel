<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('landing.home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');


Route::get('/student', 'StudentController@index');
Route::get('/student/{id}', 'StudentController@show');

Route::get('/faculty', 'FacultyController@index');
Route::get('/faculty/{faculty}', 'FacultyController@show');
Route::get('/faculty/{faculty}/course', 'FacultyController@course');

Route::get('/course', 'CourseController@showUGCourses');

Route::get('/admin', 'Admin\SystemAdminController@index');
Route::get('/admin/faculty', 'Admin\FacultyAdminController@index');
Route::get('/admin/student', 'Admin\StudentAdminController@index');
Route::get('/admin/course', 'Admin\CourseAdminController@index');


Route::get('/admin/system', 'Admin\SystemAdminController@index');
Route::post('/admin/system/createFaculty', 'Admin\SystemAdminController@createFaculty');
