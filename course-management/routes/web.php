<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome.page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@logout')->name('user.logout');

//Admin routes
Route::get('admin/home','AdminController@index')->name('admin.home');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');

Route::get('admin/logout','AdminController@logout')->name('admin.logout');


// Course Routes
Route::get('/course','CourseController@index')->name('admin.course');
Route::get('/create','CourseController@create')->name('admin.create');
Route::post('/store','CourseController@store')->name('admin.course.store');


//Student Access routes

Route::get('/course-list','HomeController@show')->name('student.course');

