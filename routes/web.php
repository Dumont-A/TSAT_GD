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
    return view('template');
});

Route::get('/home', function () {
    return view('template');
});
Auth::routes();

Route::get('club','PagesController@club')->name("club");
Route::get('info-pratique','PagesController@infoPratique')->name("info-pratique");



//route pour la page enseignement
Route::get('enseignement','EnseignementController@pageEnseignement')->name("enseignement");
Route::get('enseignement#content1','EnseignementController@pageEnseignement')->name("enseignement#content1");
Route::get('enseignement#content2','EnseignementController@pageEnseignement')->name("enseignement#content2");
Route::get('enseignement#content3','EnseignementController@pageEnseignement')->name("enseignement#content3");
Route::get('enseignement#content4','EnseignementController@pageEnseignement')->name("enseignement#content4");

//route pour la page compétition
Route::get('competition','CompetitionController@pageCompetition')->name("competition");
Route::get('competition#content1','CompetitionController@pageCompetition')->name("competition#content1");
Route::get('competition#content2','CompetitionController@pageCompetition')->name("competition#content2");
Route::get('competition#content3','CompetitionController@pageCompetition')->name("competition#content3");
Route::get('competition#content4','CompetitionController@pageCompetition')->name("competition#content4");


Route::get('liens_utiles','FrontController@liens_utiles')->name("liens_utiles");
Route::get('contact','FrontController@contact')->name("contact");
Route::get('galerie','FrontController@galerie')->name("galerie");


//Route::resource('competitions', 'CompetitionController');

//Route::get('devenir_membre', 'InfosPratiquesController@devenir_membre')->name("devenir_membre");

// Routes pour le Back-office
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', function () {
                return view('admin.page.dashboard');
            })
            ->name('admin.dashboard');
    Route::get('dashboard', function () {
        route('admin.dashboard');
    });

    // Galerie
    Route::get('photo/create/{album_id}', 'PhotoController@create')->name('photo.create')->where('album_id', '[0-9]+');
    Route::post('photo', 'PhotoController@store')->name('photo.store');
    Route::get('photo/banque', 'PhotoController@banque')->name('photo.banque');
    Route::delete('photo/{id}', 'PhotoController@destroy')->name('photo.destroy')->where('id', '[0-9]+');
    //Route::resource('photo', 'PhotoController');
    Route::resource('album', 'AlbumController');
    Route::resource('partenaire', 'PartenaireController');

    // Utilisateurs / Profil
    //
    Route::resource('user', 'UserController');

    // Documents
    //
    Route::get('document', 'DocumentController@home')->name('document.home');
    Route::get('document/create', 'DocumentController@acreate')->name('document.acreate');
    Route::post('document/store', 'DocumentController@astore')->name('document.astore');
    Route::delete('document/destroy','DocumentController@adestroy')->name('document.adestroy');

    // Articles
    //
    Route::resource('news', 'NewsController');

    // Equipes et Rencontres
    //
    Route::resource('equipe', 'EquipeController');
    Route::resource('rencontre', 'RencontreController');
    Route::get('rencontre/index/{id}', 'RencontreController@index')->name('rencontre.index')->where('id', '[0-9]+');
    Route::get('rencontre/createR/{id}', 'RencontreController@createR')->name('rencontre.createR')->where('id', '[0-9]+');
    Route::get('rencontre/convoquer/{id}', 'RencontreController@convoquer')->name('rencontre.convoquer')->where('id', '[0-9]+');
    Route::post('rencontre/convoquerstore/{id}', 'RencontreController@convoquerstore')->name('rencontre.convoquerstore');

    // Coordonnees
    //
    Route::resource('coordonnee', 'CoordonneeController');
    Route::post('coordonnee/addUserStatut/{id}', 'CoordonneeController@addUserStatut')->name('add_user_statut');
    Route::delete('coordonnee/deleteStatut/{id}', 'CoordonneeController@deleteStatut')->name('deleteStatut');

    // Menu
    //
    Route::resource('contenu', 'ContenuController');
    Route::get('contenu/edit/{id_page}', 'ContenuController@edit')->name('contenu.edit');

    // Message
    //
    Route::resource('message', 'MessageController');


});
