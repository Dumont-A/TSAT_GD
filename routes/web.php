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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f
