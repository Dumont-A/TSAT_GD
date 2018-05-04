@extends('layout_back')

@section('title')
<h1>
    Administration des photos d'un album
    <small>- Rechercher, ajoute et supprimer des photos</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => ["photo.create",$album->id], 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter une image a l'album</button>
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
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($album->Photos as $uneImage)
                            <tr>
                                <td>
                                    <center><img src="{{ url('files/album') ."/". $uneImage["titre"] .".jpg" }}" alt="img{{ $uneImage["id"] }}"></center>
                                </td>
                                <td class="col-md-2" id="td{{ $uneImage["id"] }}">
                                    {{ $uneImage["titre"] }}
                                </td>
                                <td class="col-md-1">
                                    {!! Form::open(['route' => ["photo.destroy", $uneImage->id], 'method' => 'delete', 'id' => "form".$uneImage->id]) !!}
                                        <button type="submit" id="{{ $uneImage->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                    {!! Form::close() !!}
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
