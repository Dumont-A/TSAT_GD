@extends('layout_back')

@section('title')
<h1>
    Administration des news
    <small>- Rechercher, Modifier et supprimer des news</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "news.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter</button>
                {!! Form::close() !!}
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- search form (Optional) -->
                    <form action="#" method="get">
                        <div class="input-group margin">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>News</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tab_news as $uneNews)
                            <tr id="row{{$uneNews->id}}">
                                <td class="col-md-1">
                                    {{ $uneNews["id"] }}
                                </td>
                                <td class="col-md-10" id="td{{ $uneNews["id"] }}">
                                    <a href="..." style="display:block;width:100%;height:100%;">
                                    {{ $uneNews["titre"] }}
                                    </a>
                                </td>
                                <td class="col-md-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["news.edit", $uneNews->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["news.destroy", $uneNews->id], 'method' => 'delete', 'id' => "form".$uneNews->id]) !!}
                                            <button type="button" id="{{ $uneNews->id }}" class="btn btn-danger btn-circle jsDeleteButton" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></button>
                                            {{-- <button id="btnDestroy" class="btn btn-default btn-app" type="button" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></button> --}}
                                            {!! Form::close() !!}

                                        </div>
                                    </div>
                                </td>
                            </tr>
                          @empty
                          @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@isset($uneNews)
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Confirmer la suppression de {{ $uneNews->titre }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <a id="confirmationdel" class="btn btn-danger btn-ok">Confirmer</a>
      </div>
    </div>
  </div>
</div>
@endisset
@stop


@isset($uneNews)
@section('script')
  <script>
    $('#confirmationdel').click(function(){

      $.ajax({
        type:'DELETE',
        url:'news/'+ {{ $uneNews->id }},
        data:$("#form"+{{ $uneNews->id }}).serialize(),
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
