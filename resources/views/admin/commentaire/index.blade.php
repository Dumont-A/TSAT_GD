@extends('template')
@section('content')
  <div class="box">

    <!-- /.box-header -->


    <div id="gtco-portfolio" class="gtco-section">
      <div class="gtco-container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
            <h2>{{ $laNews->titre }}</h2>
            <span>{!! $laNews->contenu !!}</span>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row row-pb-md">
            <div class="col-md-12">
              <ul id="gtco-portfolio-list">

                @forelse($laNews->commentaires as $unCommentaire)
                  <li id="row{{$unCommentaire->id}}" class="animate-box" data-animate-effect="fadeIn" style="background-color:rgb(210, 0, 123); width:100%; ">
                    <a class="color-1">
                      <div class="case-studies-summary">
                        <h2>{{$unCommentaire->titre}}</h2>
                        <span>{!! $unCommentaire->contenu !!}</span>

                        @if(auth::check())
                          @if (Auth::user()->est_admin == 1)

                          </div>
                        </a>
                      </li>
                      {{-- <span class="col-md-6">
                        {!! Form::open(['route' => ["commentaire.deleteCommentaire", $unCommentaire->id], 'method' => 'delete', 'id' => "form".$unCommentaire->id]) !!}
                        <button type="button" id="{{ $unCommentaire->id }}" class="btn btn-danger btn-circle jsDeleteButton" data-toggle="modal" data-target="#confirm-delete">Supprimer ce commentaire</button>

                        {!! Form::close() !!}

                      </span> --}}
                    @endif
                  @endif

                @empty
                  <span>Il n'y a pas de commentaire pour cette news</span>
                @endforelse




              </ul>


            </div>
            {!! Form::open(['route' => ["commentaire.createCommentaire", $laNews->id], 'method' => 'get', 'id' => "form".$laNews->id]) !!}

            <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter un commentaire</button>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
{{-- @isset($unCommentaire)
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          Confirmer la suppression du commentaire
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          <a id="confirmationdel" class="btn btn-danger btn-ok">Confirmer</a>
        </div>
      </div>
    </div>
  </div>
@endisset --}}



{{-- @isset($unCommentaire)
   @section('script')
    <script>
    $('#confirmationdel').click(function(){

      $.ajax({
        type:'DELETE',
        url:'commentaire/deleteCommentaire/'+ {{ $unCommentaire->id }},
        data:$("#form"+{{ $unCommentaire->id }}).serialize(),
        datatype:'json',
        success:function(data){
          $("#flash_error").hide();
          $("#flash_success").hide();
          $("#row"+data.id).css('color','red');
          $("#row"+data.id+ " a").css('color','red');
          $("#row"+data.id).fadeOut(2500, function() {
            $("#row"+data.id).remove();
          })
          $("#session_success").html('<center><strong>'+ data.message +' </strong></center>');
          $('#session_success2').show();
          $('#confirm-delete').modal('hide');
          $('#session_success2').fadeOut(3600, function() {
            $('#session_success2').hide();
          })
        }
      });

    });


    </script>
  @stop
@endisset --}}
