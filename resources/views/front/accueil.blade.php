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
                @php($laNews=$tab_news[0])
                <li class="animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); width:100%; ">
                  <a class="color-1" href="{{route('commentaire.indexCommentaire', ['id' => $tab_news[0]->id])}}">
                    <div class="case-studies-summary">
                      <h2>{{ $tab_news[0]->titre }}</h2>
                      <span>{!! $tab_news[0]->contenu !!}</span>
                      @if($tab_news[0]->commentaires->count()==0)
                        <span>Il n'y a pas de commentaire pour cette news</span>
                      @elseif ($tab_news[0]->commentaires->count()==1)
                        <span>{!! $tab_news[0]->commentaires->count() !!} commentaire</span>
                      @else
                        <span>{!! $tab_news[0]->commentaires->count() !!} commentaires</span>
                      @endif
                    </div>
                  </a>
                </li>
              @endif
              @if(count($tab_news) > 1)
                <li class="animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); width:100%; ">
                  <a class="color-1" href="{{route('commentaire.indexCommentaire', ['id' => $tab_news[1]->id])}}">
                    <div class="case-studies-summary">
                      <h2>{{ $tab_news[1]->titre }}</h2>
                      <span>{!! $tab_news[1]->contenu !!}</span>
                      @if($tab_news[1]->commentaires->count()==0)
                        <span>Il n'y a pas de commentaire pour cette news</span>
                      @elseif ($tab_news[1]->commentaires->count()==1)
                        <span>{!! $tab_news[1]->commentaires->count() !!} commentaire</span>
                      @else
                        <span>{!! $tab_news[1]->commentaires->count() !!} commentaires</span>
                      @endif
                    </div>
                  </a>
                </li>
              @endif
              @if(count($tab_news) > 2)
                <li class="animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); width:100%; ">
                  <a class="color-1" href="{{route('commentaire.indexCommentaire', ['id' => $tab_news[2]->id])}}">
                    <div class="case-studies-summary">
                      <h2>{{ $tab_news[2]->titre }}</h2>
                      <span>{!! $tab_news[2]->contenu !!}</span>
                      @if($tab_news[2]->commentaires->count()==0)
                        <span>Il n'y a pas de commentaire pour cette news</span>
                      @elseif ($tab_news[2]->commentaires->count()==1)
                        <span>{!! $tab_news[2]->commentaires->count() !!} commentaire</span>
                      @else
                        <span>{!! $tab_news[2]->commentaires->count() !!} commentaires</span>
                      @endif
                    </div>
                  </a>
                </li>
              @endif
              @if(count($tab_news) > 3)
                <li class="animate-box" data-animate-effect="fadeIn" style="background-image: url(images/tennisjoueur3.jpg); width:100%; ">
                  <a class="color-1" href="{{route('commentaire.indexCommentaire', ['id' => $tab_news[3]->id])}}">
                    <div class="case-studies-summary">
                      <h2>{{ $tab_news[3]->titre }}</h2>
                      <span>{!! $tab_news[3]->contenu !!}</span>
                      @if($tab_news[3]->commentaires->count()==0)
                        <span>Il n'y a pas de commentaire pour cette news</span>
                      @elseif ($tab_news[3]->commentaires->count()==1)
                        <span>{!! $tab_news[3]->commentaires->count() !!} commentaire</span>
                      @else
                        <span>{!! $tab_news[3]->commentaires->count() !!} commentaires</span>
                      @endif
                    </div>
                  </a>
                </li>
              @endif

            </ul>
          </div>
        </div>

      </div>


      <!-- Modal de commentaire -->

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="modalCommentaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="width:95%;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            </div>

          </div>
        </div>
      </div>

      <!-- FIN Modal de commentaire -->

    @stop
