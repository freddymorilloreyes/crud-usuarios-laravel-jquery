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

Route::get('/users', 'Admin\UserController@index')->name('users');
Route::get('/list/users', 'Admin\UserController@list')->name('list.users');
Route::get('/show/{id}/users', 'Admin\UserController@show')->name('show.users');
Route::get('/delete/{id}/users', 'Admin\UserController@destroy')->name('delete.users');
Route::post('/add/users', 'Admin\UserController@store')->name('add.user');
Route::post('/update/{id}/users', 'Admin\UserController@update')->name('update.user');
Route::get('/home', 'HomeController@index')->name('home');
