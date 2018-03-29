<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use Image;

class NewsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $lesNews = News::all();
        return view('admin.news.index')
                        ->with("tab_news", $lesNews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->session()->flash('success', 'La news' . $request->get('titre') . ' à été ajoutée !');

        $laNews = new News();

        $laNews->titre = $request->get('titre');
        $laNews->contenu = $request->get('editor');


        $laNews->save();
        return redirect()->route("news.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $laNews = News::find($id);
        return view('admin.news.edit')
                        ->with("laNews", $laNews);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
      $request->session()->flash('success', 'La news' . $request->get('titre') . ' à été modifiée !');
        $laNews = News::find($id);

        $laNews->titre = $request->get('titre');
        $laNews->contenu = $request->get('editor');



        $laNews->save();

        return redirect()->route("news.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id) {
        $laNews = News::find($id);
        News::destroy($id);

        return response()->json(["id"=>$id,"message"=> 'La news '. $laNews->titre .' à été supprimée !']);
    }

}
