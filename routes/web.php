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
<<<<<<< HEAD
>>>>>>> 4ebfa1eb02f2bd4df56569772da12709bc921931
Route::get('liens_utiles','FrontController@liens_utiles')->name("liens_utiles");
//com test
=======
Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');

Route::get('devenir_membre', 'InfosPratiquesController@devenir_membre')->name("devenir_membre");

>>>>>>> b7d35286a5337977438f3c1c81cee80443888cc0
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('competitions','CompetitionController@index')->name("competitions.index");
Route::resource('competitions', 'CompetitionController');
