@extends('layout_back')

@section('title')
<h1>
    Administration des partenaires
    <small>Gestion</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "partenaire.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter</button>
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
                                <th>Logo</th>
                                <th>Dénomination</th>
                                <th>Description</th>
                                <th>Code postal</th>
                                <th>Ville</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Site</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lesPartenaires as $unPartenaire)
                            <tr>
                                <td class="col-md-3" id="td{{ $unPartenaire["id"] }}">
                                    <center><img width="50%" src="{{ url('img/partenaire') ."/". $unPartenaire->logo }}" alt="img{{ $unPartenaire["id"] }}"></center>
                                </td>
                                <td class="col-md-3" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["nom"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["description"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["cp"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["ville"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["adresse"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["tel"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["site"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["fb"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["twitter"] }}
                                </td>

                                <td class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-1">
                                            {!! Form::open(['route' => ["partenaire.edit", $unPartenaire->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-pencil"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <br><br>
                                        <div class="col-md-1">
                                            {!! Form::open(['route' => ["partenaire.destroy", $unPartenaire->id], 'method' => 'delete', 'id' => "form".$unPartenaire->id]) !!}
                                            <button type="submit" id="{{ $unPartenaire->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
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
