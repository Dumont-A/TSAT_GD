<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;
use Image;
Use File;
use Auth;

class DocumentController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {


    $lesDocs = Document::Where("user_id", "=",null)->get();


      return view('admin.document.index')
      ->with('tab_docs',$lesDocs);
  }


  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response */

  public function create()
  {
    $user = Document::all();

    //dd($user);
    return view('admin.document.create');
  }



  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $request->session()->flash('success', 'Le fichier à été Ajouté !');

    $document = new Document();


    $document->user_id = $request->get('user_id');

    $document->titre = $request->get('nom');

    $contenu = $request->file('document');

    $documentname = time().'.'.$contenu->getClientOriginalName();



    $destinationPath = public_path('doc/');

    $contenu->move($destinationPath, $documentname);

    $document->contenu = $documentname;

    $document->save();

    return redirect()->route("admin.document");
  }




  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($user_id)
  {
    $tab_docs = Document::find($user_id);


    return view('site.document.show', compact('tab_docs'));
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
  public function destroy(Request $request, $id)
  {
    $request->session()->flash('success', 'Le doc à été Supprimé !');

    $doc = Document::find($id);

    File::delete("doc/" . $doc->fichier);


    $doc->delete();

    return redirect()->route("document.index");
  }

  public function adestroy(Request $request, $id)
  {
    $request->session()->flash('success', 'Le doc à été Supprimé !');

    $doc = Document::find($id);

    File::delete("doc/" . $doc->fichier);


    $doc->delete();

    return redirect()->route("document.home");
  }
}
