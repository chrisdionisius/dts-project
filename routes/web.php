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

Route::get('/home','HomeController');
Route::get('/post/{id_post}',['uses'=>'PostController@index']);

Route::get('/tulis','TulisController@index');
Route::post('/tulis/create','TulisController@create');

Route::get('/kategori','KategoriController');
Route::post('/kategori/create', 'KategoriController@create');
Route::get('/kategori/{id}/edit','KategoriController@edit');
Route::post('/kategori/{id}/update','KategoriController@update');

Auth::routes();
