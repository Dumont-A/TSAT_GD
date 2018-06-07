@extends('layout_back')

@section('title')
<h1>
    Administration des tournois
    <small>- Créer, Modifier et supprimer des tournois</small>
</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    {!! Form::open(['route' => "tournoi.create", 'method' => 'get']) !!}
                    <button type="submit" class="btn btn-success btn-lg btn-block">Créer un tournoi</button>
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
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Lien du site</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lesTournois as $unTournoi)
                                <tr>
                                    <td class="col-md-1">
                                        {{ $unTournoi["id"] }}
                                    </td>
                                    <td class="col-md-3">
                                        {{ $unTournoi["dte_debut"] }}
                                    </td>
                                    <td class="col-md-3">
                                        {{ $unTournoi["dte_fin"] }}
                                    </td>
                                    <td class="col-md-5">
                                        <a href="http://{{ $unTournoi["lien_site"] }}" target="_blank">{{ $unTournoi["lien_site"] }}</a>
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
