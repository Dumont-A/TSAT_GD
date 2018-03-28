@extends("template_page")
@section("tittle")
    @parent - Club
@stop
@section("tittle1")
Le club
@stop

@section("menu_1")
<i class="ti-book"></i></span>
<h3 class="h3Menu">Historique</h3>
@stop

@section("menu_2")
<i class="ti-briefcase"></i></span>
<h3 class="h3Menu">Le Comité</h3></a>
@stop

@section("menu_3")
<i class="ico-balle"></i></span>
<h3 class="h3Menu">Les Installations</h3>
@stop

@section("menu_4")
<i class="ti-tag"></i></span>
<h3 class="h3Menu">Partenaires</h3>
@stop

@section("content1")
<h2 class="text-center">Historique</h2>
<p>Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.</br></br>

Sed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?</br></br>

Quod si rectum statuerimus vel concedere amicis, quidquid velint, vel impetrare ab iis, quidquid velimus, perfecta quidem sapientia si simus, nihil habeat res vitii; sed loquimur de iis amicis qui ante oculos sunt, quos vidimus aut de quibus memoriam accepimus, quos novit vita communis. Ex hoc numero nobis exempla sumenda sunt, et eorum quidem maxime qui ad sapientiam proxime accedunt.</p>

@stop
@section("content2")
 <h2 class="text-center">Le Comité</h2>
   <div class="row">
 <div class="item">
   <img src="images/tete_comite.png"  width="200px" height="150px" class="col-md-3"  style="border:3px inset" >
   <p class="col-md-9" style="padding-top: 50px">Président</p>
</div>
</div>
  <div class="row">
<div class="item">
  <img src="images/tete_comite2.png"  width="200px" height="150px" class="col-md-3"  style="border:3px inset" >
  <p class="col-md-9" style="padding-top: 50px">Adjoint</p>
</div>
</div>
<div class="row">
<div class="item">
<img src="images/tete_comite3.png"  width="200px" height="150px" class="col-md-3"  style="border:3px inset" >
<p class="col-md-9" style="padding-top: 50px">Directeur du club</p>
</div>
</div>

@stop
@section("content3")
<div class="row">
  <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
              <h2>Les Installations</h2>
            </div>
          </div>
  <div class="row">

    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
      <div class="feature-center">
        <span class="icon">
          <i class="ti-home"></i>
        </span>
        <span class="counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50">1</span>
        <span class="counter-label">Gymnases</span>

      </div>
    </div>
    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
      <div class="feature-center">
        <span class="icon">
          <i class="ico-terrain"></i>
        </span>
        <span class="counter js-counter" data-from="0" data-to="25" data-speed="5000" data-refresh-interval="50">1</span>
        <span class="counter-label">Courts</span>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
      <div class="feature-center">
        <span class="icon">
          <i class="ti-user"></i>
        </span>
        <span class="counter js-counter" data-from="0" data-to="12" data-speed="5000" data-refresh-interval="50">1</span>
        <span class="counter-label">Entraineurs</span>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
      <div class="feature-center">
        <span class="icon">
          <i class="ti-id-badge"></i>
        </span>
        <span class="counter js-counter" data-from="0" data-to="134" data-speed="5000" data-refresh-interval="50">1</span>
        <span class="counter-label">Membres</span>

      </div>
    </div>

  </div>
@stop
@section("content4")
  <div class="row animate-box">
    <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
  <h2>Nos Partenaires</h2>
  <p>Allez voir nos partenaires pour des offres spéciale adhérent</p>
</div>
</div>
<div class="row animate-box">
<div class="owl-carousel owl-carousel-carousel">
  <div class="item">
    <img src="images/partenaire/download.jpg"  height="150px" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
  </div>
  <div class="item">
    <img src="images/partenaire/download2.png"  height="150px" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
  </div>
  <div class="item">
    <img src="images/partenaire/download3.png"  height="150px" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
  </div>
  <div class="item">
    <img src="images/partenaire/download.png" height="150px" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
  </div>
</div>
</div>
@stop
