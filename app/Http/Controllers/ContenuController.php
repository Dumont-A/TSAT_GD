<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contenu;

class ContenuController extends Controller {

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function getMenu($slug) {

  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index() {
    // Pas de listing de contenus, utilisation de Show
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create() {
    // Pas besoin de create, chaque "contenus" est créer par un dev, puis édité par l'utilisateur
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request) {
    // Pas besoin de store, chaque "contenus" est créer par un dev, puis édité par l'utilisateur
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($page) {
    $leContenu = Contenu::where('page', "=", $page)->get()->first();

    return view('site.contenu')
    ->with("contenu", $leContenu);
  }


  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($slug) {
    $leContenu = Contenu::where('slug', "=", $slug)->get()->first();
    return view('admin.contenu.edit')
    ->with("contenu", $leContenu);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $slug) {
    $leContenu = Contenu::where('slug', "=", $slug)->get()->first();

    $leContenu->contenu = $request->get('editor');

    $leContenu->save();

    return redirect()->route("admin.dashboard");
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id) {
    // Pas besoin de suppression, chaque "contenus" est créer par un dev, puis édité par l'utilisateur
  }

}
