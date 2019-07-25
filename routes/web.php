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
Route::get('hello','HelloController@index');
Route::get('input','SumController@sumView')->name('sum-view');
Route::post('sum', 'SumController@sum')->name('sum');

Route::get('students','StudentController@index')->name('students');
Route::get('classes','ClassRoomController@index')->name('classRoom');
Route::get('/admins', function () {
    return view('admins');
});
Route::get('/users', function () {
    return view('users');
});
Route::get('/admin_temp',function(){
    return view('admin.master');
});
