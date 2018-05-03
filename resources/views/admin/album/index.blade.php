@extends('layout_back')

@section('title')
  <h1>
    Administration des albums
    <small>- Rechercher, ajoute, modifier et supprimer des albums</small>
  </h1>
@stop

@section('content')


  <!-- Main content -->
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          {!! Form::open(['route' => "album.create", 'method' => 'get']) !!}
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
                  <th>titre de l'album</th>
                  <th>nombre de photos</th>
                  <th>image de couverture</th>
                  <th>afficher l'album</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($lesAlbums as $unAlbum)
                  <tr>
                    <td class="col-md-3" id="td{{ $unAlbum["id"] }}">
                      {{ $unAlbum["titre"] }}
                    </td>
                    <td class="col-md-2" id="td{{ $unAlbum["id"] }}">
                      {{count($unAlbum->Photos)}}
                    </td>
                    <td class="col-md-3">
                      @if(count($unAlbum->Photos) === 0)
                        <center>il n'y a pas d'image dans l'album</center>
                      @else
                        <center><img width="50%" src="{{ url('img/galerie/miniature') ."/". $unAlbum->Photos->first()->fichier }}" alt="img{{ $unAlbum["id"] }}"></center>
                      @endif
                    </td>
                    <td class="col-md-1" id="td{{ $unAlbum["id"] }}">
                      <div class="checkbox">
                        @if($unAlbum->actif == true)
                          <input checked data-toggle="toggle" type="checkbox" data-onstyle="success" name="actif" >
                        @else
                          <input data-toggle="toggle" type="checkbox" data-onstyle="success" name="actif" >
                        @endif
                      </div>
                    </td>
                    <td class="col-md-3">
                      <div class="row">
                        <div class="col-md-3">
                          {!! Form::open(['route' => ["album.show", $unAlbum->id], 'method' => 'get']) !!}
                          <button type="submit" class="btn btn-info btn-circle"><i class="fa fa-eye"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div class="col-md-3">
                          {!! Form::open(['route' => ["album.edit", $unAlbum->id], 'method' => 'get']) !!}
                          <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-pencil"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <div class="col-md-3">
                          {!! Form::open(['route' => ["album.destroy", $unAlbum->id], 'method' => 'delete', 'id' => "form".$unAlbum->id]) !!}
                          <button type="submit" id="{{ $unAlbum->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                          {!! Form::close() !!}
                        </div>
                        <br><br>
                        <div class="col-md-12">
                          {!! Form::open(['route' => ["photo.create", $unAlbum->id], 'method' => 'get']) !!}
                          <button type="submit" id="{{ $unAlbum->id }}" class="btn btn-success btn-lg btn-block">Ajouter une image a l'album</button>
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
