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

//user
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rinbisa/create', 'rinbisaController@viewcreate')->name('rinbisa.viewcreate');
Route::post('/rinbisa/create', 'rinbisaController@createC')->name('rinbisa.createC');

Route::get('/rinbisa/{id}/editfp', 'rinbisaController@vieweditfp')->name('rinbisa.vieweditfp');
Route::put('/rinbisa/{id}/editfp', 'rinbisaController@editfp')->name('rinbisa.editfp');

Route::get('/rinbisa/{id}/edit', 'rinbisaController@viewedit')->name('rinbisa.viewedit');
Route::put('/rinbisa/{id}/edit', 'rinbisaController@editdata')->name('rinbisa.editdata');


//adm
Route::get('/rinbisa', 'rinbisaController@dash_adm')->name('rinbisa.dash_adm');

Route::get('/rinbisa/user', 'rinbisaController@user')->name('rinbisa.user');