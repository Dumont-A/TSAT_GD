@extends('layout_back')

@section('title')
<h1>
    Créer un article
    <small>- Page de création d'articles</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => "news.store", 'method' => 'post', 'files' => true]) !!}
            <div class="box-header">
                <h3 class="box-title">  </h3>

                <div class="form-group">
                    <label>Titre de la news :  </label>
                    <input class="form-control" placeholder="Un titre" name="titre">
                </div>

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
