<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Album;
use App\Models\Contenu;
use App\Models\Comite;
use App\Models\User;
use App\Models\Message;
use App\Models\Rencontre;   
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller {

    public function index() {
        $lesArticles = Article::all()->sortByDesc("created_at");

        return view('site.index')
                        ->with("tab_articles", $lesArticles);
    }

    function contact() {
        $leComite = Comite::with('Users')->get();
        return view('site.contact')->with("leComite", $leComite);
    }

    function documentation() {
        return view('site.documentation');
    }

    function galerie() {
        $lesAlbums = Album::with('photos')->get();
        return view('site.galerie', compact('lesAlbums'));
    }

    function showGalerie($id) {

        $album = Album::with('photos')->find($id);
        return view('site.showGalerie', compact('album'));
    }

    function coordonnee() {
        $contenu = Contenu::where('page', "coordonnee")->get()->first();
        return view('site.coordonnee')->with("contenu", $contenu);
    }

    function profil() {
       $lesUsers = User::all();

        return view('site.profil')
                        ->with('tab_users', $lesUsers);
        
    }
    
    function editprofil($id) {
         $leUser = User::find($id);
        return view('site.profil.editmdp')
                        ->with("leUser", $leUser);
    }
    
    function convocation($id) {
         $leUser = User::find($id);
        return view('site.profil.convoc')
                        ->with("leUser", $leUser);
    }
    
     public function updateprofil(Request $request, $id) {
        $leUser = User::find($id);


     
     
        
        
     
        if ($request->get('password') !="") {
              $leUser->password = bcrypt($request->get('password'));       
        }
        
     



        $leUser->save();

        return redirect()->route("profil");
    }

    function message(Request $request) {
      //  var_dump($request->get('contenu'));
       // dd($request->get('contenu'));
        
        $request->session()->flash('success', 'Merci! Votre message a bien été envoyé');
        
        $message = new Message();
        $message->auteur = $request->get('nom') . " " .$request->get('prenom');
        $message->email = $request->get('email');
        $message->titre = $request->get('titre');
        $message->contenu = stripslashes(nl2br(htmlentities($request->get('contenu'))));
        $message->tel = $request->get('telephone');
        
        $message->save(); 
        
        $data = array('sujet' => $request->get('titre'));
        
        Mail::send('admin.message.mail', ['titre'=>$request->get('titre'),'contenu'=>$request->get('contenu'),'auteur'=>$request->get('nom') . " " . $request->get('prenom')], function ($mail) use ($data){
            $mail->from('ppetennis@gmail.com','Tennis Club Tavaux');
            $mail->to('benoit.plaideau@gmail.com');
            $mail->subject($data['sujet']);
        });
        return redirect()->route("contact");
    }
    
   
    public function accepter($id,$idJoueur,Request $request)
    {
        $request->session()->flash('success', 'Les convocations sont acceptées !');
        $rencontre = Rencontre::find($id);
        $leJoueur = User::find($idJoueur);
        $request->get('confirmation'.$leJoueur->id); 
        if ($request->get('confirmation'.$leJoueur->id)=='on')
        {
            $leJoueur->rencontres()->attach($rencontre,['confirmation'=>1]);
        }
        $leJoueur->save();
        return redirect()->route("profil");
    }
    

}
