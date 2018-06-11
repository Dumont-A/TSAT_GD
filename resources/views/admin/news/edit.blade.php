@extends('layout_back')

@section('title')
  <h1>
    Modifier une news
    <small>- Page de modification de news</small>
  </h1>
@stop

@section('content')


  <!-- Main content -->
  <div class="row">
    <div class="col-md-12">
      <div class="contenu">
        <div class="box box-info">
          {!! Form::open(['route' => ['news.update', $laNews["id"]], 'method' => 'put', 'files' => true]) !!}
          <div class="box-header">
            <h3 class="box-title">  </h3>

            <div class="form-group">
              <label>Titre de l'article :  </label>
              <input class="form-control" value="{{ $laNews["titre"] }}" name="titre">
            </div>
            <div class="form-group">
                <label>Url de l'image :  </label>
                <input class="form-control" value="{{ $laNews["url"] }}" name="url ">
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body pad">

            <div class="form-group">
              {{ Form::textarea('editor', $laNews["contenu"],['id'=>'editor','class'=>'form-control','placeholder'=>'CkEditor']) }}
            </div>

          </div>

          <button type="submit" class="btn btn-success btn-lg btn-block">Modifier</button>

          {!! Form::close() !!}
        </div>
        <!-- /.box -->
      </div>
    </div>
  </div>
  <!-- Partie commentaire -->
  <table class="table table-bordered">
    <thead class="thead-inverse">
      <tr>
        <th style="width: 10px">#</th>
        <th>Commentaire</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($laNews->commentaires as $unCommentaire)

        <tr id="row{{$unCommentaire->id}}">
          <td class="col-md-1">
            {{ $unCommentaire["id"] }}
          </td>
          <td class="col-md-10" id="td{{ $unCommentaire["id"] }}">

              <h2>{{ $unCommentaire["titre"] }}</h2>

          </td>
          <td class="col-md-1">
            <div class="row">
              <div class="col-md-6">
                {!! Form::open(['route' => ["deleteCommentaire", $unCommentaire->id], 'method' => 'delete', 'id' => "form".$unCommentaire->id]) !!}
                <button type="button" id="{{ $unCommentaire->id }}" class="btn btn-danger btn-circle jsDeleteButton" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></button>
                {{-- <button id="btnDestroy" class="btn btn-default btn-app" type="button" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></button> --}}
                {!! Form::close() !!}

              </div>
            </div>
          </td>
        </tr>
        <tr id="row{{$unCommentaire->id}}">
          <td>

          </td>
          <td class="col-md-10" id="td{{ $unCommentaire["id"] }}">

              {{ $unCommentaire["contenu"] }}

          </td>
        </tr>
      @empty
      @endforelse

    </tbody>
  </table>


@stop
@isset($unCommentaire)
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Confirmer la suppression de {{ $unCommentaire->titre }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <a id="confirmationdel" class="btn btn-danger btn-ok">Confirmer</a>
      </div>
    </div>
  </div>
</div>
@endisset



@isset($unCommentaire)
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
@endisset
