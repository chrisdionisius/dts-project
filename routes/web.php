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

Route::get('/','HomeController');

Auth::routes();

Route::get('/home','HomeController');
Route::get('/post/{id_post}',['uses'=>'PostController@index']);

Route::get('/tulis','TulisController@index');
Route::post('/tulis/create','TulisController@create');

Route::get('/kategori','KategoriController');
Route::post('/kategori/create', 'KategoriController@create');
Route::get('/kategori/{id}/edit','KategoriController@edit');
Route::post('/kategori/{id}/update','KategoriController@update');
Route::get('/kategori/{id}/delete','KategoriController@delete');

Route::get('/user','UserController');
Route::get('/user/{id}/delete','UserController@delete');

Route::get('/managepost','ManagePostController');
Route::post('/managepost/{id}/update','ManagePostController@update');
Route::get('/managepost/{id}/delete','ManagePostController@delete');

Auth::routes();
