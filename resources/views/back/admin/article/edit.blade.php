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
        <div class="contenu">
            <div class="box box-info">
                {!! Form::open(['route' => ['article.update', $article["id"]], 'method' => 'put', 'files' => true]) !!}               
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Titre de l'article :  </label>
                        <input class="form-control" value="{{ $article["titre"] }}" name="titre"> 
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Image de présentation :</label>
                                <input type="file" name="image">
                            </div>
                        </div>

                        <div class="col-md-9">
                            <p style="font-weight:bold">Image actuel :</p>
                            @if (!empty($article["photo"]))
                            <img src="{{url('/img/articles') . '/' . $article["photo"] }}" alt="Image de l'article" width="450" height="150">

                            @else
                            <p> Aucune image actuellement</p>

                            @endif
                        </div>
                    </div>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Réduire">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Supprimer">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <div class="form-group">
                        {{ Form::textarea('editor', $article["description"],['id'=>'editor','class'=>'form-control','placeholder'=>'CkEditor']) }}
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


