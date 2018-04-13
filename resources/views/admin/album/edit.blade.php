@extends('layout_back')

@section('title')
<h1>
    modifier
    <small>- modification d'un album</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => ['album.update', $lesAlbums["id"]], 'method' => 'put', 'files' => true]) !!}
            <div class="box-header">
                <h3 class="box-title">  </h3>

                <div class="form-group">
                    <label>Titre de l'album :  </label>
                    <input class="form-control" value="{{ $lesAlbums["titre"] }}" name="name">
                </div>

            </div>
            <!-- /.box-header -->


            <button type="submit" class="btn btn-success btn-lg btn-block">Modifier</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop
