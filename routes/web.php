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

Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');

<<<<<<< HEAD
Route::get('front/liens_utiles','FrontController@liens_utiles')->name("front.liens_utiles");
Route::resource('front', 'FrontController');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> e725d1cc5a3347a7c2ef4105ad3fee8e67f372e0
