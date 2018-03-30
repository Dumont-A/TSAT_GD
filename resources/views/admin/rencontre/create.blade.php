@extends('layout_back')

@section('title')
<h1>
    Créer une rencontre
    <small>- Page de création de rencontres pour l'équipe {{ $uneEquipe->nom }}</small>
</h1>
@stop

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => "rencontre.store", 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Date de la rencontre :  </label>
                        <input type ="date" class="form-control" placeholder="Date :" name="dte"> 
                    </div>
                    <div class="form-group">
                        <label>Lieu de la rencontre :  </label>
                        <input class="form-control" placeholder="Lieu :" name="lieu">
                    </div>
                    <div class="form-group">
                        <label>Adversaire :  </label>
                        <input class="form-control" placeholder="Adversaire :" name="adversaire">
                    </div>
                    <div class="form-group">
                        <input type="hidden" value="{{ $uneEquipe->id }}" name="equipe_id">
                    </div>
                </div>
                <!-- /.box-header -->


                <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop
