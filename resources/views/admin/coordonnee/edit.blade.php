@extends('layout_back')

@section('title')
<h1>
    Modifier les coordonnées
    <small>- Page de modification des coordonnées</small>
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
</div>

@stop
