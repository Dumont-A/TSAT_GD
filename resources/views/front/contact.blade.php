@extends("template")

@section("tittle")
{{ $contenu->titre }}
@stop
@section("sous_menu")
<div class="row menu-hidden" id="sous-menu">
  <div class="col-md-4 col-sm-5">
    <div class="feature-center animate-box" data-animate-effect="fadeIn">
      <a href="#{{ $contenu->sousmenus[0]->slug }}" ><span class="icon iconMyStyle">
          <i class=" ti-mobile"></i></span>
          <h3 class="h3Menu">{{ $contenu->sousmenus[0]->titre }}</h3>
      </a>
    </div>
  </div>
  <div class="col-md-4 col-sm-5">
    <div class="feature-center animate-box" data-animate-effect="fadeIn">
      <a href="#{{ $contenu->sousmenus[1]->slug }}"><span class="icon iconMyStyle">
       <i class=" ti-comment-alt"></i></span>
      <h3 class="h3Menu">{{ $contenu->sousmenus[1]->titre }}</h3></a>
      </a>
    </div>
  </div>
  <div class="col-md-4 col-sm-5">
    <div class="feature-center animate-box" data-animate-effect="fadeIn">
      <a href="#{{ $contenu->sousmenus[2]->slug }}"><span class="icon iconMyStyle">
       <i class="ti-map-alt"></i></span>
      <h3 class="h3Menu">{{ $contenu->sousmenus[2]->titre }}</h3>
      </a>
    </div>
  </div>
@stop

@section("content")

    <div id="{{ $contenu->sousmenus[0]->slug }}">
        <div id="gtco-portfolio" class="gtco-section">
          <div class="row">
              <div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
               <h2 class="text-center">{{ $contenu->sousmenus[0]->titre }}</h2>
               {!! $contenu->sousmenus[0]->contenu !!}
              </div>
          </div>
        </div>
      </div>
      <div id="{{ $contenu->sousmenus[1]->slug }}">
        <div id="gtco-counter" class="gtco-section">
          <div class="gtco-container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
               <h2 class="text-center">{{ $contenu->sousmenus[1]->titre }}</h2>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="{{ $contenu->sousmenus[2]->slug }}">
        <div id="gtco-products">
          <div class="gtco-container">
           <div class="row">
              <div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
               <h2 class="text-center">{{ $contenu->sousmenus[2]->titre }}</h2>
                <div style="width: 700px; height: 500px;">
                	 {!! Mapper::render() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
@stop

@section("script")
 $('#sous-menu a').on('click', function(evt) {

// bloquer le comportement par défaut: on ne rechargera pas la page
       evt.preventDefault();
       // enregistre la valeur de l'attribut  href dans la variable target
	var target = $(this).attr('href');
       /* le sélecteur $(html, body) permet de corriger un bug sur chrome
       et safari (webkit) */
	$('html, body')
       // on arrête toutes les animations en cours
       .stop()
       /* on fait maintenant l'animation vers le haut (scrollTop) vers
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 800 );
    });
 @stop
