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
        </div> <!-- contenu -->
    </div>
</div><table class="table table-bordered">
    <thead class="thead-inverse">
        <tr>
            <th style="width: 10px">#</th>
            <th>News</th>
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
                <a href="..." style="display:block;width:100%;height:100%;">
                {{ $unCommentaire["titre"] }}
                </a>
            </td>
            <td class="col-md-1">
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::open(['route' => ["news.edit", $unCommentaire->id], 'method' => 'get']) !!}
                        <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(['route' => ["news.destroy", $unCommentaire->id], 'method' => 'delete', 'id' => "form".$unCommentaire->id]) !!}
                        <button type="button" id="{{ $unCommentaire->id }}" class="btn btn-danger btn-circle jsDeleteButton" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-times"></i></button>
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


@stop
