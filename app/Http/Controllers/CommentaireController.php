<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // // $laNews= News::find($id);
      // $lesCommentaires = $laNews->commentaires();
      // return view('admin.commentaire.index')
      //                 ->with("lesCommentaires", $lesCommentaires);
    }
    public function indexCommentaire($id_news)
    {
      $laNews= News::find($id_news);
      $lesCommentaires = $laNews->commentaires();
      return view('admin.commentaire.index')->with("lesCommentaires", $lesCommentaires)->with("laNews", $laNews);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.commentaire.create');
    }
    public function createCommentaire($id_news)
    {
        $laNews= News::find($id_news);
        return view('admin.commentaire.create')->with('laNews', $laNews);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $leCommentaire = new Commentaire();

      $leCommentaire->titre = $request->get('titre');
      $leCommentaire->contenu = $request->get('editor');
      $leCommentaire->news_id = $request->get('id_news');
      $leCommentaire->pseudo = $request->get('pseudo');


      $leCommentaire->save();
      return redirect()->back();
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

    }
    public function deleteCommentaire($id)
    {
      $leCommentaire = Commentaire::find($id);
      Commentaire::destroy($id);

      return response()->json(["id"=>$id,"message"=> 'Le commentaire '. $leCommentaire->titre .' à été supprimé !']);
    }
}
