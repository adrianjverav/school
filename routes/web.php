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
    return redirect()->route('login');;
});

Auth::routes();

Route::middleware('auth')->group(function() {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('courses', 'CourseController');

	Route::get('courses/{course}/assign-teacher', 'CourseController@assignTeacher')->name('courses.assign-teacher');
	Route::put('courses/{course}/save-teacher', 'CourseController@saveTeacher')->name('courses.save-teacher');
	Route::get('courses/{course}/add-student', 'CourseController@addStudent')->name('courses.add-student');
	Route::put('courses/{course}/save-student', 'CourseController@saveStudent')->name('courses.save-student');
	Route::get('courses/{course}/students', 'CourseController@students')->name('courses.students');
	Route::get('courses/{course}/change-note/{student}', 'CourseController@changeNote')->name('courses.change-note');
	Route::put('courses/{course}/update-note/{student}', 'CourseController@updateNote')->name('courses.update-note');



	Route::resource('users', 'UserController');

	Route::get('teachers', 'UserController@teachers')->name('teachers');
	Route::get('students', 'UserController@students')->name('students');
});