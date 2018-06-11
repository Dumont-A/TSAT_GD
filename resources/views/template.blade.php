<!DOCTYPE HTML>
<!--
Aesthetic by gettemplates.co
Twitter: http://twitter.com/gettemplateco
URL: http://gettemplates.co
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		@section("tittle")
			TSAT GD
		@show
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->

	<!-- Animate.css -->

	<link rel="stylesheet" href="{{ url('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->

	<link rel="stylesheet" href="{{ url('css/icomoon.css')}}">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="{{ url('css/themify-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ url('css/icontennis.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ url('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{ url('css/MyStyle.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('css/style.css')}}">

	<!-- Gallery  -->
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">                                      <!-- Bootstrap style -->
	<link rel="stylesheet" href="{{ url('css/magnific-popup.css')}}">                                     <!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('css/templatemo-style.css')}}">                                   <!-- Templatemo style -->

	<!-- Modernizr JS -->
	<script src="{{ url('js/modernizr-2.6.2.min.js')}}"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	@if (Session::has('error') || Session::has('errors'))
		<input type="hidden" value="1" id="checkModal">
	@else
		<input type="hidden" value="0" id="checkModal">
	@endif
	@php ($connexionStatut = "Se connecter")
	<!-- PERMET DE CHANGER LE BOUTON SE CONNECTER EN NOM + PRENOM -->
	@if (Auth::check()) <!-- SI le user est connecté on change l'id pour la modal de profil -->
		<!-- Définition des infos utilisateur pour modal profil -->
		@php ($identifiant = "profil")
		@php ($connexionStatut = Auth::user()->nom ." ". Auth::user()->prenom)
	@else <!-- Si il est déconnecté, on change l'id pour la modal de connexion -->
		@php ($identifiant = "login")
	@endif
	<div class="gtco-loader"></div>

	<div id="page">

		<!-- Si utilisateur est admin, on lui affiche le lien du back office -->
		@php ($statutAfficher = "hidden")
		@if (Auth::check())
			@if (Auth::user()->est_admin == 1)
				@php ($statutAfficher = "visible")
			@endif
		@endif
		<nav id="div_nav" class="gtco-nav" role="navigation">
			<div class="row">

				<div class="row">
					<div class="col-md-12 text-right gtco-contact">
						<ul class="">
							<li><a id="{{$identifiant}}" href="#">{{$connexionStatut}} <i class="ti-user"></i></a></li>
							<li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
							<li><a href="#"><i class="icon-mail2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<img id="logo" src="{{ url('images/logo_png.png')}}" alt="logo transparent" height="300" width="300"  >
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="active"><a id="li_menu" href="{{route('accueil')}}">Accueil</a></li>
							<li class="has-dropdown">
								<a  id="li_menu" href="{{route('club')}}">Club</a>
								<ul class="dropdown">
									<li><a href="#">Horaires</a></li>
									<li><a href="#">Devenir Membre</a></li>
									<li><a href="#">Réservation</a></li>
									<li><a href="#">Tarifs</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a id="li_menu" href="{{route('competition')}}">Compétitions</a>
								<ul class="dropdown">
									<li><a href="#">Tournois</a></li>
									<li><a href="#">Les équipes</a></li>
									<li><a href="#">Les arbitres</a></li>
									<li><a href="#">Résultats</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a id="li_menu"  href="{{route('info-pratique')}}">Infos Pratiques</a>
								<ul class="dropdown">
									<li><a href="#">Horaires</a></li>
									<li><a href="#">Devenir Membre</a></li>
									<li><a href="#">Réservation</a></li>
									<li><a href="#">Tarifs</a></li>
								</ul>
							</li>
							<li class="has-dropdown">
								<a id="li_menu" href="{{route('enseignement')}}">L'enseignement</a>
								<ul class="dropdown">
									<li><a href="#">L'équipe pédagogique</a></li>
									<li><a href="#">L'école de tennis</a></li>
									<li><a href="#">Les cours collectifs adultes</a></li>
									<li><a href="#">Les stages</a></li>
								</ul>
							</li>
							<li><a id="li_menu" href="{{route('galerie')}}">Galerie</a></li>
							<li><a id="li_menu" href="{{route('liens_utiles')}}">Liens utiles</a></li>
							{{-- <li><a id="li_menu" href="{{route('contact')}}">Contact</a></li> --}}
						</ul>
					</div>
				</div>
			</div>
			<div class="animate-box  ">
				<h1 id="titre_sous_logo" class="animate-box" data-animate-effect="fadeInUp" ><span style="background:#d2007b63; padding-left:10px ; padding-right:10px">@yield("tittle")</span></h1>
			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{url('images/tennis3.jpg')}});">
			<div class="overlay"></div>
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 text-left">
						<div class="display-t">
							<div class="display-tc">
								<div id="gtco-features" class="gtco-features-3">
									<div id="menu">
										<div class="gtco-container ">
											<div class="row">
											</div>
											@yield("sous_menu")
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div class="row">
		@yield("content")
	</div>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Créateurs</h3>
						<p>Classe SIO2 alternants 2016-2018. CAVIN Elodie, BUFFARD Hugo, PERRIGGUEY Adrien, CHAMBELLAND Kevin, DUMONT Alexandre, BATAILLE Kevin</p>
					</div>
				</div>

				<div class="col-md-4 co Adrl-md-push-1">
					<div class="gtco-widget">
						<h3>Liens utiles</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Site de la FFT</a></li>
							<li><a href="#">Tennis wikipedia</a></li>
							<li><a href="#">Ancien site</a></li>
							<li><a href="#">Mentions légales</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Au cas où</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> 01 02 03 04 05</a></li>
							<li><a href="#"><i class="icon-mail2"></i> cavinelodie@gmail.com</a></li>
						</ul>
					</div>
				</div>



			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>

	</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- Modal de login -->
<div class="modal" id="modalLogin" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="loginClose">&times;</button>
				<h4><span class="glyphicon glyphicon-lock"></span>Se connecter</h4>
			</div>
			<div class="modal-body">
				@if (Session::has('error'))
					<p class="alert alert-danger">{{ Session::get('error') }}</p>
				@endif
				<form class="form-horizontal" method="POST" action="{{ route('login') }}">
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">Adresse e-mail</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						{{ csrf_field() }}
						<label for="password" class="col-md-4 control-label">Mot de passe</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control" name="password" required>
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<a class="btn btn-link" id="oubliMdp" href="javascript:void(0)">
								Mot de passe oublié?
							</a>
						</div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-primary">
								Connexion
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- FIN Modal de login -->

<!-- Modal de PROFIL -->

@if (Auth::check())

	<div class="modal fade" id="modalProfil" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="profilClose" class="close">&times;</button>
					<h4>Mon profil</h4>
				</div>
				<div class="row">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-6">
								<label for="names"> Nom, prénom : </label>
								{{ Auth::user()->nom }} {{ Auth::user()->prenom }}
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<label for="email"> Email : </label>
								{{ Auth::user()->email }}
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-6">
								<label for="telephone"> Téléphone : </label>
								{{ Auth::user()->telephone}}
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="modal-body">
						<div class="form-row">
							<div class="col-md-6">
								<a class="btn btn-primary" href="{{route('admin.dashboard')}}" style="visibility: {{$statutAfficher}}">Vers le mode administrateur</a>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								{!! Form::open(['route' => ['logout'], 'method' => 'post']) !!}
								<button type="submit" class="btn btn-primary">Déconnexion</button>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endif
<!-- FIN Modal de PROFIL -->
<!-- DEBUT Modal de Reset Password -->
<div class="modal fade" id="modalPassword" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Réinitialiser le mot de passe</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
				<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">Adresse e-mail</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Envoyer lien
							</button>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
					<button type="submit" class="btn btn-primary">Envoyer lien</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- FIN Modal de Reset Password -->

<!-- jQuery -->
<script src="{{ url('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{ url('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ url('js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ url('js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{ url('js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{ url('js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{ url('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ url('js/magnific-popup-options.js')}}"></script>

<!-- Gallery -->
<script src="{{ url('js/isotope.pkgd.min.js')}}"></script>          <!-- https://isotope.metafizzy.co/ -->
<script src="{{ url('js/imagesloaded.pkgd.min.js')}}"></script>     <!-- https://imagesloaded.desandro.com/ -->
<script src="{{ url('js/jquery.magnific-popup.min.js')}}"></script> <!-- http://dimsemenov.com/plugins/magnific-popup/ -->
<script src="{{ url('js/parallax.min.js')}}"></script>


<script src="{{ url('js/main.js')}}"></script>

<script src="{{url('js/lightbox.min.js')}}"></script>
<script>
$(document).ready(function() {
	$('.js-scrollTo').on('click', function() { // Au clic sur un élément
		var page = $(this).attr('href'); // Page cible
		var speed = 750; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
		return false;
	});
});
</script>

<!-- SCRIPT MODAL LOGIN -->
<!--Définit les variables du script pour la bonne modal -->
@php ($identifiant = "#login")
@php ($nom_modal = "#modalLogin")
@if (Auth::check())
	@php ($identifiant = "#profil")
	@php ($nom_modal = "#modalProfil")
@endif
<script>
$(document).ready(function(){

	if ($("#checkModal").val()==1){
		$("#modalLogin").modal();
	}


	$('{{$identifiant}}').click(function(){
		$('{{$nom_modal}}').modal();
	});

        $('{{$identifiant}}Close').click(function(){
		$('{{$nom_modal}}').modal('toggle');
	});

        $('#oubliMdp').click(function(){
		$('{{$nom_modal}}').modal('toggle');
		$('#modalPassword').modal('toggle');
	});
});
</script>

<script>
@yield('script')
</script>
</body>
</html>
