<?php

namespace App\Http\Controllers;

use App\Models\Tournoi;
use Illuminate\Http\Request;
class TournoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lesTournois=Tournoi::all();
        return view("admin.tournoi.index")->with("lesTournois",$lesTournois);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
   {
       return view('admin.tournoi.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

       $tournoi = new Tournoi();

       $tournoi->dte_debut = $request->get('dte_debut');
       $tournoi->dte_fin = $request->get('dte_fin');
       $tournoi->dte_fin_inscription = $request->get('dte_fin_inscription');
       $tournoi->lien_site = $request->get('lien_site');
       $tournoi->save();
       return redirect()->route("tournoi.index");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
