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

Route::get('/', 'PeoplesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::any('search', 'PeoplesController@search');
Route::get('/insertimage', 'PeoplesController@setImagePath');

Route::resource('peoples', 'PeoplesController');


