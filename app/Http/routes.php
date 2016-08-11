<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/detail', 'HomeController@detail');
Route::get('/admin', 'HomeController@admin');
Route::get('/data_provinsi', 'HomeController@data_provinsi');
Route::get('/tambah_data', 'HomeController@tambah_data');
Route::put('/profile/{id}', 'ProfileController@update');
