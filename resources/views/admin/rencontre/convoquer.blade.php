@extends('layout_back')

@section('title')
<h1>
    Convoquer des joueurs pour la rencontre qui aura lieu à : {{ $rencontre->lieu }}
    <small>- Cocher pour convoquer les joueurs</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' =>[ "rencontre.convoquerstore",$rencontre->id], 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">Liste des joueurs disponibles</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Séléction joueurs</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_joueurs as $unJoueur)
                            <tr>
                                <td class="col-md-1">
                                    {{ $unJoueur->id }}
                                </td>
                                <td class="col-md-4">
                                    {{ $unJoueur->nom }}
                                </td>
                                <td class="col-md-4">
                                    {{ $unJoueur->prenom }}
                                </td>
                                <td class="col-md-4">
                                <div class="checkbox" style="text-align:center">
                                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="confirmation{{$unJoueur["id"]}}">
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    </div>
                    
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                

                <button type="submit" class="btn btn-success btn-lg btn-block">Convoquer les joueurs</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop