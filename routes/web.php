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


Route::get('liens_utiles','FrontController@liens_utiles')->name("liens_utiles");

Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');

Route::get('devenir_membre', 'InfosPratiquesController@devenir_membre')->name("devenir_membre");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
