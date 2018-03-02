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





#CONTOH : Route bisa dibikin per group by prefix kalo misalnya bingung liat nama gara-gara terlalu berantakan
Route::group(['prefix' => 'latihan'], function($route){
	Route::get('/', 'LatihanController@index');

	Route::get('create', 'LatihanController@viewcreate');
	Route::post('/', 'LatihanController@create');

	Route::get('/{id}', 'LatihanController@show');

	Route::get('/{id}/viewedit', 'LatihanController@viewedit');
	Route::put('/{id}', 'LatihanController@editdata');

	Route::get('latihan/destroy/{id}', 'LatihanController@destroy');
});


Route::get('/soal', 'SoalController@index');
Route::get('/soal/{$request}', 'SoalController@getNilai');

//user
Auth::routes();

Route::get('/rinbisa/index', 'rinbisaController@index')->name('rinbisa.index');
Route::get('/home/{id}', 'rinbisaController@showUser')->name('rinbisa.showUser');
Route::get('/home', 'HomeController@index')->name('home');

//kategoricamp
Route::get('rinbisa/create_camp', 'rinbisaController@showKat')->name('rinbisa.showKat');

//campaign
#CONTOH : Route bisa dibikin per group by prefix kalo misalnya bingung liat nama gara-gara terlalu berantakan
Route::group(['prefix' => 'rinbisa'], function($route){
	Route::get('campaign', 'rinbisaController@viewcamp')->name('rinbisa.viewcamp');
	Route::get('create', 'rinbisaController@viewcreate')->name('rinbisa.viewcreate');
	Route::post('create', 'rinbisaController@createC')->name('rinbisa.createC');
});
//ini
Route::get('/rinbisa/index/{id}', 'rinbisaController@viewdet')->name('rinbisa.viewdet');

//donasi 
Route::get('/rinbisa/donasi', 'rinbisaController@viewdon')->name('rinbisa.viewdon');

//profile
Route::get('/rinbisa/{id}/editfp', 'rinbisaController@vieweditfp')->name('rinbisa.vieweditfp');
Route::put('/rinbisa/{id}/editfp', 'rinbisaController@editfp')->name('rinbisa.editfp');

Route::get('/rinbisa/{id}/edit', 'rinbisaController@viewedit')->name('rinbisa.viewedit');
Route::put('/rinbisa/{id}/edit', 'rinbisaController@editdata')->name('rinbisa.editdata');

//proses donasi
Route::get('/rinbisa/{id}/prosesDon', 'rinbisaController@viewproses')->name('rinbisa.viewproses');
Route::post('/rinbisa/{id}/prosesDon', 'rinbisaController@prosesD')->name('rinbisa.prosesD');
Route::put('/rinbisa/{id}/prosesDon2', 'rinbisaController@prosesAkh')->name('rinbisa.prosesAkh');



//adm
Route::get('/rinbisa', 'rinbisaController@dash_adm')->name('rinbisa.dash_adm');

Route::get('/rinbisa/user', 'rinbisaController@user')->name('rinbisa.user');

Route::get('/rinbisa/admin/donasi', 'rinbisaController@viewdon_a')->name('rinbisa.viewdon_a');
Route::get('/rinbisa/admin/donasi/{id}', 'rinbisaController@detail_d')->name('rinbisa.detail_d');
Route::put('/rinbisa/admin/donasi/{id}', 'rinbisaController@update_d')->name('rinbisa.update_d');

Route::get('/rinbisa/admin/campaign', 'rinbisaController@viewcamp_a')->name('rinbisa.viewcamp_a');
Route::get('/rinbisa/admin/campaign/{id}', 'rinbisaController@detail_c')->name('rinbisa.detail_c');
Route::get('/rinbisa/admin/campaign/delete_c/{id}', 'rinbisaController@delete_c')->name('rinbisa.delete_c');

Route::get('/rinbisa/admin/user', 'rinbisaController@viewuser_a')->name('rinbisa.viewuser_a');