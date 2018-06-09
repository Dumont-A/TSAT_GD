@extends("template")
@section ('content')

      <div class="box">

        <!-- /.box-header -->


          <div id="gtco-portfolio" class="gtco-section">
            <div class="gtco-container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                  <h2>Nos derniers articles</h2>
                  <p>N'hésitez pas à aller voir nos albums photos !</p>
                </div>
              </div>

              <div class="row row-pb-md">
                <div class="col-md-12">
                  <ul id="gtco-portfolio-list">
                    @if(count($tab_news) > 0)
                      <li class="animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); width:100%; ">
                        <a class="color-1" href="{{route('commentaire.createCommentaire', ['id' => $tab_news[0]->id])}}">
                          <div class="case-studies-summary">
                            <h2>{{ $tab_news[0]->titre }}</h2>
                            <span>{!! $tab_news[0]->contenu !!}</span>
                            @if($tab_news[0]->commentaires->count()==0)
                            <span>Il n'y a pas de commentaire pour cette news</span>
                            @else
                            <span>{!! $tab_news[0]->commentaires->count() !!}</span>
                          @endif
                          </div>
                        </a>
                      </li>
                    @endif
                    @if(count($tab_news) > 1)
                      <li class="animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur2.jpg); width:100%; ">
                        <a class="color-1">
                          <div class="case-studies-summary">
                            <h2>{{ $tab_news[1]->titre }}</h2>
                            <span>{!! $tab_news[1]->contenu!!}</span>
                            <span>{!! $tab_news[1]->nb_commentaire !!}</span>
                          </div>
                        </a>
                      </li>
                    @endif
                    @if(count($tab_news) > 2)
                      <li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg);  width:100%;">
                        <a class="color-1">
                          <div class="case-studies-summary">
                            <h2>{{ $tab_news[2]->titre }}</h2>
                            <span>{!! $tab_news[2]->contenu!!}</span>
                            <span>{!! $tab_news[2]->nb_commentaire !!}</span>
                          </div>
                        </a>
                      </li>
                    @endif
                    @if(count($tab_news) > 3)
                      <li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur2.jpg);  width:100%;">
                        <a class="color-1">
                          <div class="case-studies-summary">
                            <h2>{{ $tab_news[3]->titre }}</h2>
                            <span>{!! $tab_news[3]->contenu!!}</span>
                            <span>{!! $tab_news[3]->nb_commentaire !!}</span>
                          </div>
                        </a>
                      </li>
                    @endif

                  </ul>
                </div>
              </div>

            </div>




    @stop
