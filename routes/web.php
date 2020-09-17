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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/user')->group(function(){
    Route::get('/index','user\IndexController@index')->name('user.index');
    Route::get('/about-us','user\AboutController@index')->name('user.about');
    Route::get('/course','user\CourseController@index')->name('user.course');
    Route::get('/course-details','user\CourseController@index2')->name('user.course-detail');
    Route::get('/contact','user\ContactController@index')->name('user.contact');
});

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard','admin\AdminController@index')->name('admin.dashboard');
    Route::get('/course','admin\CourseController@index')->name('admin.course');
});