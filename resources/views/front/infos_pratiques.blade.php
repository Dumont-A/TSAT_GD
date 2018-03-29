
@extends("template_page")
@section("tittle")
    @parent - Infos Pratiques
@stop

@section("menu_1")
<i class="ti-book"></i></span>
<h3 class="h3Menu">Horaires</h3>
@stop

@section("menu_2")
<i class="ti-briefcase"></i></span>
<h3 class="h3Menu">Devenir membre</h3>
@stop

@section("menu_3")
<i class="ico-balle"></i></span>
<h3 class="h3Menu">Réservation</h3>
@stop

@section("menu_4")
<i class="ti-tag"></i></span>
<h3 class="h3Menu">Tarifs</h3>
@stop

@section("content1")
<h2 class="text-center">Horaires</h2>
<p>Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.</br></br>

Sed si ille hac tam eximia fortuna propter utilitatem rei publicae frui non properat, ut omnia illa conficiat, quid ego, senator, facere debeo, quem, etiamsi ille aliud vellet, rei publicae consulere oporteret?</br></br>

Quod si rectum statuerimus vel concedere amicis, quidquid velint, vel impetrare ab iis, quidquid velimus, perfecta quidem sapientia si simus, nihil habeat res vitii; sed loquimur de iis amicis qui ante oculos sunt, quos vidimus aut de quibus memoriam accepimus, quos novit vita communis. Ex hoc numero nobis exempla sumenda sunt, et eorum quidem maxime qui ad sapientiam proxime accedunt.</p>

@stop
@section("content2")
 <h2 class="text-center">Devenez membre!</h2>
 <form>
   <div class="form-group">
     <label for="mail">Adresse e-mail</label>
     <input type="email" class="form-control" id="mail" placeholder="exemple@mail.com">
   </div>
   <div class="form-group">
     <label for="nom">Nom</label>
     <input type="text" class="form-control" id="nom">
   </div>
   <div class="form-group">
     <label for="prenom">Prénom</label>
     <input type="text" class="form-control" id="prenom">
   </div>
   <div class="form-group">
     <label for="vous">Qui êtes vous vis à vis du club ?</label>
     <textarea type="text" class="form-control" id="vous" rows="3"></textarea>
   </div>
   <button class="btn btn-block btn-default btn-lg" type="button">Envoyer la demande</button>
 </form>
@stop


@section("content3")

@stop
@section("content4")
@stop
