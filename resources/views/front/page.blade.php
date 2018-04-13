@extends("template")

@section("tittle")
{{ $contenu->titre }}
@stop
@section("sous_menu")
  <div class="row menu-hidden">
    <div class="col-md-3 col-sm-6">
      <div class="feature-center animate-box" data-animate-effect="fadeIn">
        <a href="#{{ $contenu->sousmenus[0]->slug }}" ><span class="icon iconMyStyle">
            <i class="ti-book"></i></span>
            <h3 class="h3Menu">{{ $contenu->sousmenus[0]->titre }}</h3>
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="feature-center animate-box" data-animate-effect="fadeIn">
        <a href="#{{ $contenu->sousmenus[1]->slug }}"><span class="icon iconMyStyle">
         <i class="ti-briefcase"></i></span>
        <h3 class="h3Menu">{{ $contenu->sousmenus[1]->titre }}</h3></a>
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="feature-center animate-box" data-animate-effect="fadeIn">
        <a href="#{{ $contenu->sousmenus[2]->slug }}"><span class="icon iconMyStyle">
         <i class="ico-balle"></i></span>
        <h3 class="h3Menu">{{ $contenu->sousmenus[2]->titre }}</h3>
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="feature-center animate-box" data-animate-effect="fadeIn">
        <a href="#{{ $contenu->sousmenus[3]->slug }}"><span class="icon iconMyStyle">
          <i class="ti-tag"></i></span>
            <h3 class="h3Menu">{{ $contenu->sousmenus[3]->titre }}</h3>
        </a>
      </div>
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
               {!! $contenu->sousmenus[1]->contenu !!}

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
               {!! $contenu->sousmenus[2]->contenu !!}
              </div>
            </div>
          </div>
        </div>

      </div>
      <div id="{{ $contenu->sousmenus[3]->slug }}">
         <div id="gtco-portfolio">
          <div class="gtco-container">
              <div class="row">
              <div class="col-md-8 col-md-offset-2 text-justify gtco-heading animate-box">
               <h2 class="text-center">{{ $contenu->sousmenus[3]->titre }}</h2>
               {!! $contenu->sousmenus[3]->contenu !!}
              </div>
            </div>
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
