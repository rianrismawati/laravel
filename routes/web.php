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

//Route::get('/test', function () {
//    return 'Hallo rin!';
//});

Route::get('/first', 'FirstController@index');

Route::get('/first/create', 'FirstController@create');
Route::post('/first', 'FirstController@store');

Route::get('/first/{id}', 'FirstController@show');

Route::get('/first/{id}/edit', 'FirstController@edit');
Route::put('/first/{id}', 'FirstController@update');


Route::get('/first/destroy/{id}', 'FirstController@destroy');





Route::get('/latihan', 'LatihanController@index');

Route::get('/latihan/create', 'LatihanController@viewcreate');
Route::post('latihan/', 'LatihanController@create');

Route::get('/latihan/{id}', 'LatihanController@show');

Route::get('/latihan/{id}/viewedit', 'LatihanController@viewedit');
Route::put('/latihan/{id}', 'LatihanController@editdata');

Route::get('latihan/destroy/{id}', 'LatihanController@destroy');


Route::get('/soal', 'SoalController@index');
Route::get('/soal/{$request}', 'SoalController@getNilai');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
