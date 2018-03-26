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
Route::get('liens_utiles','FrontController@liens_utiles')->name("liens_utiles");
//com test
=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

=======
<<<<<<< HEAD
>>>>>>> 4ebfa1eb02f2bd4df56569772da12709bc921931
>>>>>>> febd0648d5f323872b5cc44e63d12b9167e0b76f
Route::get('liens_utiles','FrontController@liens_utiles')->name("liens_utiles");

Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');

Route::get('devenir_membre', 'InfosPratiquesController@devenir_membre')->name("devenir_membre");


>>>>>>> a881a5cfdf624986b91e190bb41f9815b28032b6
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
=======


Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');
>>>>>>> febd0648d5f323872b5cc44e63d12b9167e0b76f
