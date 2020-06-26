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

Route::get('/about', 'HalController@about');

Route::get('/mahasiswa', 'MhsController@index');

Route::get('/students/create', 'StudentsController@create');

Route::get('/students/{student}', 'StudentsController@show');

Route::post('student-save', 'StudentsController@store');

Route::get('/student-edit/{student}', 'StudentsController@edit');

Route::get('/students', 'StudentsController@index');

Route::post('student-update', 'StudentsController@update');

Route::get('/student-destroy/{student}', 'StudentsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');