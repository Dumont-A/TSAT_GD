@extends('layout_back')

@section('title')
<h1>
    Administration des rencontres pour l'équipe : {{ $uneEquipe->libelle }}
    <small>- Créer, Modifier et supprimer des rencontres</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route'=>["rencontre.createR", $uneEquipe->id], 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Créer une rencontre</button>
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
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Adversaire</th>
                                <th>Equipe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uneEquipe->rencontres as $uneRencontre)
                            <tr>
                                <td class="col-md-1">
                                    {{ $uneRencontre["id"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $uneRencontre["date"] }}">
                                    {{ $uneRencontre["date"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $uneRencontre["lieu"] }}">
                                    {{ $uneRencontre["lieu"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $uneRencontre["adversaire"] }}">
                                    {{ $uneRencontre["adversaire"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $uneRencontre["equipe_id"] }}">
                                    {{ $uneRencontre->equipe->nom }}
                                </td>
                                <td class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-2">
                                            {!! Form::open(['route' => ["rencontre.edit", $uneRencontre->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-2">
                                            {!! Form::open(['route' => ["rencontre.destroy", $uneRencontre->id], 'method' => 'delete', 'id' => "form".$uneRencontre->id]) !!}
                                            <button type="submit" id="{{ $uneRencontre->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-8">
                                            <a class="btn btn-primary btn-circle" href="{{ route("rencontre.convoquer",$uneRencontre->id) }}">Convoquer des joueurs</a>
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
