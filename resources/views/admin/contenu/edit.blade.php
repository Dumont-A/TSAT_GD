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
                {!! Form::open(['route' => ['contenu.update', $contenu["slug"]], 'method' => 'put', 'files' => true]) !!}
                <!-- /.box-header -->
                <div class="box-body pad">

                    <div class="form-group">
                        {{ Form::textarea('editor', $contenu["contenu"],['id'=>'editor','class'=>'form-control','placeholder'=>'CkEditor']) }}
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
