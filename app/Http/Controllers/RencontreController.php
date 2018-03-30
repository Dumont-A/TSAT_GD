<?php

namespace App\Http\Controllers;
use App\Models\Rencontre;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class RencontreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($equipe_id)
    {

        $uneEquipe = Equipe::find($equipe_id);
        return view('admin.rencontre.index')->with('uneEquipe', $uneEquipe);
    }

    public function createR($equipe_id)
    {
        $uneEquipe = Equipe::find($equipe_id);
        return view('admin.rencontre.create')->with('uneEquipe', $uneEquipe);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dte' => 'required',
            'lieu' => 'required',
            'adversaire' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('rencontre.createR',["id"=>$request->get('equipe_id')]))
                        ->withErrors($validator)
                        ->withInput();
        }
        $request->session()->flash('success', 'La rencontre à été ajoutée !');
        $rencontre = new Rencontre();
        $rencontre->dte = $request->get('dte');
        $rencontre->lieu = $request->get('lieu');
        $rencontre->adversaire = $request->get('adversaire');
        $rencontre->equipe_id = $request->get('equipe_id');
        $rencontre->save();
        return redirect()->route("equipe.index");
    }

    public function edit($id)
    {
        $rencontre = Rencontre::find($id);
        $lesEquipes = Equipe::pluck('nom', 'id');
        return view('admin.rencontre.edit', compact('rencontre', 'lesEquipes'));
    }

    public function update(Request $request, $id)
    {
        $rencontre = Rencontre::find($id);

        $rencontre->dte = $request->get('date');
        $rencontre->lieu = $request->get('lieu');
        $rencontre->adversaire = $request->get('adversaire');
        $rencontre->equipe_id= $request->get('equipe_id');

        $rencontre->save();

        return redirect()->route("equipe.index");
    }

    public function destroy(Request $request, $id)
    {
        $request->session()->flash('success', 'La rencontre à été supprimée !');
        $rencontre = Rencontre::find($id);
        $rencontre->delete();
        return redirect()->route("equipe.index");
    }

        public function convoquer($rencontre_id)
    {
       $rencontre = Rencontre::find($rencontre_id);
       $lesJoueurs = User::where("joueur", "=", 1)->whereNotIn('id',[$rencontre_id])->get();
       return view('admin.rencontre.convoquer')->with('tab_joueurs', $lesJoueurs)->with('rencontre', $rencontre);
    }

    public function convoquerstore($id,Request $request)
    {
        $request->session()->flash('success', 'Les joueurs sont notifiés de la rencontre !');
        $rencontre = Rencontre::find($id);
        $lesUser = User::all();

        foreach($lesUser as $user){
            $request->get('confirmation'.$user->id);
            if ($request->get('confirmation'.$user->id)=='on')
            {
                $rencontre->users()->attach($user,['confirmation'=>0]);
            }
        }
        $rencontre->save();
        return redirect()->route("equipe.index");
    }


}
