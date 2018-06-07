<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Photo;
use App\Models\Album;
use App\Models\SousMenu;
use App\Models\Comite;
use App\Models\User;
use App\Models\Message;
use App\Models\Rencontre;
use App\Models\Menu;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactFormRequest;
use Mapper;

class PagesController extends Controller {

    public function accueil() {
      $tab_news = News::all()->sortByDesc("created_at");

      return view('front.accueil')
                      ->with("tab_news", $tab_news);
    }
    public function club() {

        $contenu=Menu::where("slug","club")->first();
        return view('front.club')->with("contenu",$contenu);
    }
    public function competition() {

        $contenu=Menu::where("slug","competition")->first();
        return view('front.competition')->with("contenu",$contenu);
    }
    public function infoPratique() {

        $contenu=Menu::where("slug","info-pratique")->first();
        return view('front.info_pratique')->with("contenu",$contenu);
    }
    public function enseignement() {

        $contenu=Menu::where("slug","enseignement")->first();
        return view('front.enseignement')->with("contenu",$contenu);
    }
    public function contact() {

        Mapper::map(47.051175, 5.413658, ['zoom' => 17]);

        $contenu=Menu::where("slug","contact")->first();
        return view('front.contact')->with("contenu",$contenu);
    }

    public function index() {
        $lesArticles = Article::all()->sortByDesc("created_at");

        return view('site.index')
                        ->with("tab_articles", $lesArticles);
    }
    public function storeFront(Request $request){
      User::create([
        'nom' => $request->input('nom'),
        'prenom' => $request->input('prenom'),
        'email' => $request->input('email'),
        'telephone' => $request->input('telephone'),
        'password' => bcrypt($request->input('password')),
        'commentaire' => $request->input('commentaire'),
      ]);
      return redirect()->route("info-pratique");
      //Ajouter une alerte pour afficher l'envoi de la création de membre
    }

    /* function contact() {
        $leComite = Comite::with('Users')->get();
        return view('site.contact')->with("leComite", $leComite);
    }
    */
    function documentation() {
        return view('site.documentation');
    }

    function galerie() {
        $lesAlbums = Album::with('photos')->get();
        return view('front.galerie')->with("lesAlbums", $lesAlbums);
    }

    function showGalerie($id) {

        $lesAlbums = Album::with('photos')->find($id);
        dd($lesAlbums);
        return view('site.showGalerie', compact('lesAlbums'));
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

    public function store(Request $request)
    {


    }

    public function create()
    {
        $contenu=Menu::where("slug","contact")->first();
        return view('front.contact')->with("contenu",$contenu);
    }


}
