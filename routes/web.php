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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'indexController@index')->name('index');
Route::get('/search', 'indexController@search')->name('search');
Route::post('/search', 'indexController@saveSuccess')->name('success');

Route::resource('card','cardController');
Route::resource('type','typeController');
Route::resource('message','messageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



