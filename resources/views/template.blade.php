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

	<!-- Modernizr JS -->
	<script src="{{ url('js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<div class="gtco-loader"></div>

	<div id="page">

	  <nav class="gtco-nav" role="navigation">
	    <div class="gtco-container">
	      <div class="row">
	        <div class="col-md-12 text-right gtco-contact">
	          <ul class="">
	              <li><a id="connect" href="#">Se connecter</a></li>
	            <li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
	            <li><a href="#"><i class="icon-mail2"></i></a></li>
	            <li><a href="{{route('admin.dashboard')}}"><i class="ti-user"></i></a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-3 col-xs-12">
	          <img src="{{ url('images/logo_png.png')}}" alt="logo transparent" height="200" width="200">
	        </div>
	        <div class="col-xs-9 text-right menu-1">
	          <ul>
	            <li class="active"><a href="index.html">Accueil</a></li>
	            <li class="has-dropdown">
	              <a href="{{route('page',['page'=>'club'])}}">Club</a>
	            </li>
	            <li class="has-dropdown">
	              <a href="{{route('competition')}}">Compétitions</a>
	              <ul class="dropdown">
	                <li><a href="{{route('competition#content1')}}">Tournois</a></li>
	                <li><a href="{{route('competition#content2')}}">Les équipes</a></li>
	                <li><a href="{{route('competition#content3')}}">Les arbitres</a></li>
	                <li><a href="{{route('competition#content4')}}">Résultats</a></li>
	              </ul>
	            </li>
	            <li class="has-dropdown">
	              <a href="{{route('infos')}}">Infos Pratiques</a>
	              <ul class="dropdown">
	                <li><a href="{{route('infos#content1')}}">Horaires</a></li>
	                <li><a href="{{route('infos#content2')}}">Devenir Membre</a></li>
	                <li><a href="{{route('infos#content3')}}">Réservation</a></li>
	                <li><a href="{{route('infos#content4')}}">Tarifs</a></li>
	              </ul>
	            </li>
	            <li class="has-dropdown">
	              <a href="{{route('enseignement')}}">L'enseignement</a>
	              <ul class="dropdown">
	                <li><a href="{{route('enseignement#content1')}}">L'équipe pédagogique</a></li>
	                <li><a href="{{route('enseignement#content2')}}">L'école de tennis</a></li>
	                <li><a href="{{route('enseignement#content3')}}">Les cours collectifs adultes</a></li>
	                <li><a href="{{route('enseignement#content4')}}">Les stages</a></li>
	              </ul>
	            </li>
	            <li><a href="{{route('galerie')}}">Galerie</a></li>
	            <li><a href="{{route('liens_utiles')}}">Liens utiles</a></li>
	            <li><a href="{{route('contact')}}">Contact</a></li>
	          </ul>
	        </div>
	      </div>
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

	                          <div class="col-md-12 text-center gtco-heading animate-box">
	                            <h1 class="animate-box" data-animate-effect="fadeInUp">@yield("tittle")</h1>
	                          </div>
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
	      </div>
	    </header>

	@yield("content")



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
    <div class="modal fade" id="modal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-lock"></span>Se connecter</h4>
          </div>
          <div class="modal-body">
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
                        <a class="btn btn-link" href="{{ route('password.request') }}">
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
   </div>
    <!-- FIN Modal de login -->

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
    <!-- Main -->
    <script src="{{ url('js/main.js')}}"></script>


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
    <script>
        document.getElementById("connect").style.cursor = "pointer";
        $(document).ready(function(){
            $("#connect").click(function(){
                $("#modal").modal();
            });
        });
    </script>
    <script>
        @yield('script')
    </script>
    </body>
</html>
