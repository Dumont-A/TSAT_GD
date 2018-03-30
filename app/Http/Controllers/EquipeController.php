<?php

namespace App\Http\Controllers;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesEquipes = Equipe::all();
        return view('admin.equipe.index')->with('tab_equipes', $lesEquipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'division' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('equipe.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $request->session()->flash('success', 'L\'équipe à été ajoutée !');
        $equipe = new Equipe();

        $equipe->libelle = $request->get('nom');
        $equipe->division = $request->get('division');
        $equipe->save();
        return redirect()->route("equipe.index");
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
        $equipe = Equipe::find($id);
        return view('admin.equipe.edit')->with("equipe", $equipe);
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
        $equipe = Equipe::find($id);

        $equipe->libelle = $request->get('nom');
        $equipe->division = $request->get('division');

        $equipe->save();

        return redirect()->route("equipe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->flash('success', 'L\'équipe à été supprimée !');

        $equipe = Equipe::find($id);

        $equipe->delete();

        return redirect()->route("equipe.index");
    }
}
