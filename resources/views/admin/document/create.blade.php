@extends('layout_back')

@section('title')
  <h1>
    DOC<small>- ajoute des documents</small>
  </h1>
@stop
@section('content')


  <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
        {!! Form::open(['route' => "document.store",'files' => true, 'method' => 'post']) !!}

        <div class="box-header">
            <h3 class="box-title">  </h3>

            <div class="form-group">
                <label>Nom du document :  </label>
                <input class="form-control" placeholder="Mon document" name="titre">
            </div>

        </div>

        <div class="box-body pad">
        <div class="form-group">
          <label>Parcourir image :</label>
          <input type="file" name="document">
        </div>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>
        <button type="reset" class="btn btn-danger btn-lg btn-block">Effacer le formulaire</button>
        {!! Form::close() !!}

      </div>
      <!-- /.box -->
    </div>
  </div>
@stop
