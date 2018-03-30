<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partenaire;


class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesPartenaires = Partenaire::all();
        return view('admin.partenaire.index', compact('lesPartenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partenaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->get('filepath'));
       /* $request->session()->flash('success', 'Le partenaire à été Ajouté !');

        $partenaire = new Partenaire();

        $partenaire->nom = $request->get('name');
        $partenaire->description = $request->get('description');
        $partenaire->adresse = $request->get('adresse');
        $partenaire->ville = $request->get('ville');
        $partenaire->cp = $request->get('cp');
        $partenaire->tel = $request->get('tel');
        $partenaire->site = $request->get('site');
        $partenaire->facebook = $request->get('fb');
        $partenaire->twitter = $request->get('twitter');



        $partenaire->logo = $imagename;

        $partenaire->save();
        return redirect()->route("partenaire.index");*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partenaire = Partenaire::find($id);
        return view('admin.partenaire.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->session()->flash('success', 'Le partenaire à été modifié !');

        $partenaire = Partenaire::find($id);

        $partenaire->nom = $request->get('name');
        $partenaire->description = $request->get('description');
        $partenaire->adresse = $request->get('adresse');
        $partenaire->ville = $request->get('ville');
        $partenaire->cp = $request->get('cp');
        $partenaire->tel = $request->get('tel');
        $partenaire->site = $request->get('site');
        $partenaire->facebook = $request->get('fb');
        $partenaire->twitter = $request->get('twitter');

        $oldLogo = $partenaire->logo;
        $logo = $request->file('logo');


        $partenaire->save();


        return redirect()->route("partenaire.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->flash('success', 'Le partenaire à été Supprimé !');

        $partenaire = Partenaire::find($id);

        File::delete("img/partenaire/" . $partenaire->logo);
        $partenaire->delete();

        return redirect()->route("partenaire.index");
    }
}
