@extends('layout_back')

@section('title')
<h1>
    Modifier la page : 
    <small>{{ $contenu["titre"] }}</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="contenu">
            <div class="box box-info">
                {!! Form::open(['route' => ['contenu.update', $contenu["page"]], 'method' => 'put', 'files' => true]) !!}               
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Titre de la page :  </label>
                        <input class="form-control" value="{{ $contenu["titre"] }}" name="titre"> 
                    </div>

                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <div class="form-group">
                        {{ Form::textarea('editor', $contenu["ckeditor"],['id'=>'editor','class'=>'form-control','placeholder'=>'CkEditor']) }}
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


