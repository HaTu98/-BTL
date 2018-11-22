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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/student-register', 'Auth\StudentRegisterController@registerStudent')->name('student-register');
Route::post('/student-register', 'Auth\StudentRegisterController@register')->name('student-register');
Route::get('/student-import', 'Auth\StudentRegisterController@import')->name('student-import');
Route::post('/student-import', 'Auth\StudentRegisterController@importStudent')->name('student-import');*/

/*Route::get('/teacher-register', 'Auth\TeacherRegisterController@registerTeacher')->name('teacher-register');
Route::post('/teacher-register', 'Auth\TeacherRegisterController@register')->name('register-teacher');
Route::get('/teacher-import', 'Auth\TeacherRegisterController@import')->name('teacher-import');
Route::post('/teacher-import', 'Auth\TeacherRegisterController@importTeacher')->name('teacher-import');*/

Route::get('/student-register', 'Admin\StudentController@registerStudent')->name('student-register');
Route::post('/student-register', 'Admin\StudentController@register')->name('student-register');
Route::get('/student-import', 'Admin\StudentController@import')->name('student-import');
Route::post('/student-import', 'Admin\StudentController@importStudent')->name('student-import');

Route::get('/teacher-register', 'Admin\TeacherController@registerTeacher')->name('teacher-register');
Route::post('/teacher-register', 'Admin\TeacherController@register')->name('register-teacher');
Route::get('/teacher-import', 'Admin\TeacherController@import')->name('teacher-import');
Route::post('/teacher-import', 'Admin\TeacherController@importTeacher')->name('teacher-import');


