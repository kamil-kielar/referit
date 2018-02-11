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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/game', 'PagesController@game');

Route::get('/dashboard', 'PagesController@dashboard');

Route::resource('/users', 'UserController');

Route::resource('/data', 'ManageGameController');

Route::get('/play-single', 'PagesController@play');

Route::resource('images', 'ImagesController');
