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


Route::post('simpanKoordinat', 'HomeController@simpanKoordinat');

Route::get('/home', 'HomeController@index');
Route::get('/detail/view/{id}', 'HomeController@detail');
Route::get('/admin', 'HomeController@admin');
Route::get('/data/{id}', 'HomeController@data_provinsi')->where('id', '[1-3]+');
Route::get('/tambah_data/{id}', 'HomeController@tambah_data')->where('id', '[1-3]+');
Route::get('/tambah_titik/{id}', 'HomeController@tambah_titik');
Route::get('/detail/view/hapus_titik/{id}', 'HomeController@hapus_titik');
Route::delete('/data/remove/{id}', 'HomeController@hapus');
Route::get('/data/{id}/edit', 'HomeController@edit');
Route::put('/editDi/{id}', 'HomeController@editDi');

Route::put('/profile/{id}', 'ProfileController@update');
Route::put('/simpanDi', 'HomeController@simpanDi');
Route::put('apply/upload', 'ProfileController@uploadImg');

Route::resource('irigasi', 'IrigasiController');

