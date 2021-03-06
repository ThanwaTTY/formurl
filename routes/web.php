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
Route::resource('lib', 'LibController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('movie','MovieController@index');
Route::get('movieview','MovieController@view');
Route::get('song','Music\SongController@index');
Route::get('radio','RedioController@index');
Route::get('songplay','Music\SongController@play');
Route::get('band','Music\SongController@band');
