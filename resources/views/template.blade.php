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
@yield('content')

<!-- FIN Modal de PROFIL -->

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
});
</script>

<script>
@yield('script')
</script>
</body>
</html>
