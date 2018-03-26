@extends('layout_back')

@section('title')
<h1>
    Modifier une équipe
    <small>- Page de modification de l'équipe</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => ['equipe.update', $equipe["id"]], 'method' => 'put']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Nom de l'équipe :  </label>
                        <input class="form-control" value="{{ $equipe["nom"] }}" name="nom">
                    </div>
                    <div class="form-group">
                        <label>Division de l'équipe :  </label>
                        <input class="form-control" value="{{ $equipe["division"] }}" name="division"> 
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
                

                <button type="submit" class="btn btn-success btn-lg btn-block">Modifier</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop