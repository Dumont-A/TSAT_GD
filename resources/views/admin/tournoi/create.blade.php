@extends('layout_back')

@section('title')
<h1>
    Créer un tournoi
    <small>- Page de création de tournoi</small>
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
            {!! Form::open(['route' => "tournoi.store", 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Date du début du tournoi :  </label>
                        <input type ="date" class="form-control" placeholder="Date :" name="dte_debut">
                    </div>
                    <div class="form-group">
                        <label>Date de fin du tournoi :  </label>
                        <input type ="date" class="form-control" placeholder="Date :" name="dte_fin">
                    </div>
                    <div class="form-group">
                        <label>Date de fin des inscriptions : </label>
                        <input type ="date" class="form-control" placeholder="Date :" name="dte_fin_inscription">
                    </div>
                    <div class="form-group">
                        <label>Lien du site :  </label>
                        <input class="form-control" placeholder="Lien du site :" name="lien_site">
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
