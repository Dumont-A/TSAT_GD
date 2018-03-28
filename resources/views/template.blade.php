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

	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->

	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/icontennis.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/MyStyle.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
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
	            <?php 
                    $connexionStatut = "Se connecter";
                    if (Auth::check()) {
                        $connexionStatut = Auth::user()->email;
                    }
                    ?>
                    <li><a id="connect">{{$connexionStatut}}</a></li>
	            <li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
	            <li><a href="#"><i class="icon-mail2"></i></a></li>
	            <li><a href="#"><i class="ti-facebook"></i></a></li>
	          </ul>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-sm-3 col-xs-12">
	          <img src="images/logo_png.png" alt="logo transparent" height="200" width="200" style="margin-top:-50px;">
	        </div>
	        <div class="col-xs-9 text-right menu-1">
	          <ul>
	            <li class="active"><a href="index.html">Accueil</a></li>
	            <li class="has-dropdown">
	              <a href="{{route('club')}}">Club</a>
	              <ul class="dropdown">
	                <li><a href="{{route('club#content1')}}">Historique du club</a></li>
	                <li><a href="{{route('club#content2')}}">Le comité</a></li>
	                <li><a href="{{route('club#content3')}}">Installations</a></li>
	                <li><a href="{{route('club#content4')}}">Partenaires</a></li>
	              </ul>

	              {{-- <a href="{{route('club')}}">Le club</a> --}}

	            </li>
	            <li class="has-dropdown">
	              <a href="{{route('competitions.index')}}">Compétitions</a>
	              <ul class="dropdown">
	                <li><a href="#">Tournois</a></li>
	                <li><a href="#">Les équipes</a></li>
	                <li><a href="#">Les arbitres</a></li>
	                <li><a href="#">Résultats</a></li>
	              </ul>
	            </li>
	            <li class="has-dropdown">
	              <a href="#">Infos Pratiques</a>
	              <ul class="dropdown">
	                <li><a href="#">Horaires</a></li>
	                <li><a href="#">Devenir Membre</a></li>
	                <li><a href="#">Réservation</a></li>
	                <li><a href="#">Tarifs</a></li>
	              </ul>
	            </li>
	            <li class="has-dropdown">
	              <a href="#">L'enseignement</a>
	              <ul class="dropdown">
	                <li><a href="#">L'équipe pédagogique</a></li>
	                <li><a href="#">L'école de tennis</a></li>
	                <li><a href="#">Les cours collectifs adultes</a></li>
	                <li><a href="#">Les stages</a></li>
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

	  <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/tennis3.jpg);">
	      <div class="overlay"></div>
	      <div class="gtco-container">
	        <div class="row">
	          <div class="col-md-12 col-md-offset-0 text-left">
	            <div class="display-t">
	              <div class="display-tc">

	                <div id="gtco-features" class="gtco-features-3">
	                  <div id="menu">
	                          <div class="gtco-container">

	                        <div class="row">
	                          <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
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
=======
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-md-12 text-right gtco-contact">
						<ul class="">
                                                        <?php 
                                                        $connexionStatut = "Se connecter";
                                                        if (Auth::check()) {
                                                            $connexionStatut = Auth::user()->email;
                                                        }
                                                        ?>
							<li><a id="connect">{{$connexionStatut}}</a></li>
							<li><a href="http://twitter.com/gettemplatesco"><i class="ti-twitter-alt"></i> </a></li>
							<li><a href="#"><i class="icon-mail2"></i></a></li>
							<li><a href="{{route('admin.dashboard')}}"><i class="ti-user"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<img src="images/logo_png.png" alt="logo transparent" height="200" width="200" style="margin-top:-50px;">
					</div>
					<div class="col-xs-9 text-right menu-1">
						<ul>
							<li class="active"><a href="#">Accueil</a></li>
							<li class="has-dropdown">
								<a href="{{route('club')}}">Club</a>
								<ul class="dropdown">
									<li><a href="{{route('club#content1')}}">Historique du club</a></li>
									<li><a href="{{route('club#content2')}}">Le comité</a></li>
									<li><a href="{{route('club#content3')}}">Installations</a></li>
									<li><a href="{{route('club#content4')}}">Partenaires</a></li>
								</ul>

								{{-- <a href="{{route('club')}}">Le club</a> --}}

							</li>
							<li class="has-dropdown">
								<a href="{{route('competitions.index')}}">Compétitions</a>
								<ul class="dropdown">
									<li><a href="#">Tournois</a></li>
									<li><a href="#">Les équipes</a></li>
									<li><a href="#">Les arbitres</a></li>
									<li><a href="#">Résultats</a></li>
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
								<a href="#">L'enseignement</a>
								<ul class="dropdown">
									<li><a href="#">L'équipe pédagogique</a></li>
									<li><a href="#">L'école de tennis</a></li>
									<li><a href="#">Les cours collectifs adultes</a></li>
									<li><a href="#">Les stages</a></li>
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

		<header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/tennis3.jpg);">
				<div class="overlay"></div>
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-left">
							<div class="display-t">
								<div class="display-tc">

									<div id="gtco-features" class="gtco-features-3">
										<div id="menu">
														<div class="gtco-container">

													<div class="row">
														<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
															<h1 class="animate-box" data-animate-effect="fadeInUp">@yield("tittle1")</h1>
														</div>
													</div>
													<div class="row">
														<div class="col-md-3 col-sm-6">
															<div class="feature-center animate-box" data-animate-effect="fadeIn">
																<a href="#content1" ><span class="icon iconMyStyle">
																	@yield("menu_1")
																</a>
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="feature-center animate-box" data-animate-effect="fadeIn">
																<a href="#content2" ><span class="icon iconMyStyle">
																	@yield("menu_2")
																</a>
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="feature-center animate-box" data-animate-effect="fadeIn">
																<a href="#content3"><span class="icon iconMyStyle">
																	@yield("menu_3")
																</a>
															</div>
														</div>
														<div class="col-md-3 col-sm-6">
															<div class="feature-center animate-box" data-animate-effect="fadeIn">
																<a href="#content4"><span class="icon iconMyStyle">
																	@yield("menu_4")
																</a>
															</div>
														</div>
													</div>
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
			<div id="content1">
					<div id="gtco-portfolio" class="gtco-section">
						<div class="row">
								<div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
									@yield("content1")
								</div>
						</div>
					</div>
				</div>
				<div id="content2">
					<div id="gtco-counter" class="gtco-section">
						<div class="gtco-container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
									@yield("content2")
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="content3">
					<div id="gtco-products">
						<div class="gtco-container">
							@yield("content3")
						</div>
					</div>

				</div>
				<div id="content4">
					 <div id="gtco-portfolio">
						<div class="gtco-container">

			@yield("content4")
						</div>
					</div>
				</div>

				{{--
			pour des tuiles d'images
					<div class="row">
										<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
											<h2>Les Installations</h2>
										</div>
									</div>

									<div class="row row-pb-md">
										<div class="col-md-12">
											<ul id="gtco-portfolio-list">
												<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur1.jpg); ">
													<a href="#" class="color-1">
														<div class="case-studies-summary">
															<span>Journée 7</span>
															<h2>Magnifique partie de Adrien Perriguey</h2>
														</div>
													</a>
												</li>
												<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur2.jpg); ">
													<a href="#" class="color-2">
														<div class="case-studies-summary">
															<span>Championnat 2017</span>
															<h2>Alexandre Dumont sacré vainqueur en solo</h2>
														</div>
													</a>
												</li>


												<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); ">
													<a href="#" class="color-3">
														<div class="case-studies-summary">
															<span>Journée 6</span>
															<h2>Notre joueur Hugo Buffard accusé de tricherie</h2>
														</div>
													</a>
												</li>
												<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur4.jpg); ">
													<a href="#" class="color-4">
														<div class="case-studies-summary">
															<span>Journée 5</span>
															<h2>De superbes résultats pour notre duo</h2>
														</div>
													</a>
												</li>

												<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/joueurtennis5.jpg); ">
													<a href="#" class="color-5">
														<div class="case-studies-summary">
															<span>Journée 4</span>
															<h2>Victoire écrasante de l'équipe de Tavaux</h2>
														</div>
													</a>
												</li>
												<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur6.jpg); ">
													<a href="#" class="color-6">
														<div class="case-studies-summary">
															<span>Championnat 2016</span>
															<h2>Des résultats mitigés</h2>
														</div>
													</a>
												</li>
											</ul>
										</div> --}}
					{{-- pour s'inscrire , non utilisé

					<div id="gtco-subscribe">
						<div class="gtco-container">
							<div class="row animate-box">
								<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
									<h2>Demande d'adhésion au club</h2>
									<p>Suivez nous</p>
								</div>
							</div>
							<div class="row animate-box">
								<div class="col-md-12">
									<form class="form-inline">
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												<label for="email" class="sr-only">Email</label>
												<input type="email" class="form-control" id="email" placeholder="Votre email">
											</div>
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												<label for="name" class="sr-only">Nom et prenom</label>
												<input type="text" class="form-control" id="name" placeholder="Votre nom">
											</div>
										</div>
										<div class="col-md-4 col-sm-4">
											<button type="submit" class="btn btn-default btn-block">Envoyer</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
			--}}













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
>>>>>>> b714f7bb279e592a482f8ab949bea568c0ec8092
    </footer>
    </div>

    <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

<<<<<<< HEAD
=======
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

>>>>>>> 9ba9bab0d494aafde84b731be6d3cdf1c5df184a
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
<<<<<<< HEAD
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
=======
<<<<<<< HEAD

=======
    <!-- SCRIPT MODAL LOGIN -->
    <script>
        document.getElementById("connect").style.cursor = "pointer";
        $(document).ready(function(){
            $("#connect").click(function(){
                $("#modal").modal();
            });
        });
    </script>
>>>>>>> 8b5d4e4df4723faf7064c8629e628e0702036e07
>>>>>>> 9ba9bab0d494aafde84b731be6d3cdf1c5df184a
    </body>
    </html>
