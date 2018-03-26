@extends('layout_back')

@section('title')
<h1>
    Créer une équipe
    <small>- Page de création d'équipes</small>
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
            {!! Form::open(['route' => "equipe.store", 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Nom de l'équipe :  </label>
                        <input class="form-control" placeholder="Nom :" name="nom"> 
                    </div>
                    <div class="form-group">
                        <label>Division de l'équipe :  </label>
                        <input class="form-control" placeholder="Division :" name="division"> 
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
