@extends('layout_back')

@section('title')
<h1>
    Rédiger un commentaire pour la news {{$laNews->titre}}
    <small>- Page de création de commentaire</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => "commentaire.store", 'method' => 'post', 'files' => true]) !!}
            <div class="box-header">
                <h3 class="box-title">  </h3>

                <div class="form-group">
                    <label>Titre du commentaire :  </label>
                    <input class="form-control" placeholder="Un titre" name="titre">
                </div>
                <input class="form-control" name="id_news" value="{{$laNews->id}}">
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

                <div class="form-group">
                    {{ Form::textarea('editor', '',['id'=>'editor','class'=>'form-control','placeholder'=>'CkEditor']) }}
                </div>

            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop
