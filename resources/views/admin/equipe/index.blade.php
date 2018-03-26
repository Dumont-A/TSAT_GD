@extends('layout_back')

@section('title')
<h1>
    Administration des équipes
    <small>- Créer, Modifier et supprimer des équipes</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "equipe.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Créer une équipe</button>
                {!! Form::close() !!}
                <!-- /.box-header -->
                <div class="box-body">
                    
                    <!-- search form (Optional) -->
                    <form action="#" method="get">
                        <div class="input-group margin">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Equipe</th>
                                <th>Division</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_equipes as $uneEquipe)
                            <tr>
                                <td class="col-md-1">
                                    {{ $uneEquipe["id"] }}
                                </td>
                                <td class="col-md-4">
                                    {{ $uneEquipe["nom"] }}
                                </td>
                                <td class="col-md-4">
                                    {{ $uneEquipe["division"] }}
                                </td>
                                <td class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-3">
                                            {!! Form::open(['route' => ["equipe.edit", $uneEquipe->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-3">
                                            {!! Form::open(['route' => ["equipe.destroy", $uneEquipe->id], 'method' => 'delete', 'id' => "form".$uneEquipe->id]) !!}
                                            <button type="submit" id="{{ $uneEquipe->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-primary btn-circle" href="{{ route("rencontre.index", $uneEquipe->id) }}">Ajouter Rencontre</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop