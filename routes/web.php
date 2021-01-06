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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('master')->group(function(){

    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin.home')->middleware('is_admin');;
    Route::get('/register_students', 'App\Http\Controllers\Admin\DashboardController@addStudent')->name('reg_doc');
    Route::post('/register_students/save', 'App\Http\Controllers\Admin\DashboardController@studentSave')->name('savedoc');


});
//Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/test','App\Http\Controllers\Lecturer\LecturerController@testFuck');

Route::prefix('lecturer')->group(function(){

    Route::get('/', 'App\Http\Controllers\Lecturer\LecturerController@index')->name('lecturer');
    Route::post('/show_place/show', 'App\Http\Controllers\Lecturer\LecturerController@getNearestLocation')->name('showroute');
    Route::post('/show_on_map', 'App\Http\Controllers\Lecturer\LecturerController@getNearestLocation')->name('show_on_map');
});
