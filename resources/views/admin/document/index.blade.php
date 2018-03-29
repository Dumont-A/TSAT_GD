@extends('layout_back')
@section('title')
  <h1>
    Administration des Docs
    <small>- Rechercher, Modifier et supprimer des docs</small>
  </h1>
@stop
@section('content')


  <!-- Main content -->
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">

          {!! Form::open(['route' => "document.create", 'method' => 'get']) !!}
          <button type="submit" class=" btn btn-success ">Nouveau document</button>
          {!! Form::close() !!}</div>

          <div class="box-body">
            <table>
              <thead class="panel-body">
                <tr>
                  <th style="text-align:center">Titre</th>
                  <th style="text-align:center">Fichier</th>
                  <th style="text-align:center">Action</th>

                </tr>

              </thead>
              <tbody>

                <?php  $c = true ?>

                @foreach ($tab_docs as $unDoc)



                  <?php echo '<tr' . (($c = !$c) ? ' class="odd"' : ' class="even"') . ">"; ?>
                  <td class="col-md-1 col-md-offset-4 ">
                    {{ $unDoc["nom"] }}
                  </td >
                  <td class="col-md-5" >
                    <center><objet  data="{{ url('doc/') ."/". $unDoc["fichier"] }}" alt="img{{ $unDoc["id"] }}" ><a href="{{ url('doc/') ."/". $unDoc["fichier"] }}" target="_blank" >{{ $unDoc["fichier"]}}</a> </objet></center>
                  </td>
                  <td class="col-md-1">
                    <div class="row">


                      <div class="col-md-4">
                        {!! Form::open(['route' => ["document.destroy", $unDoc->id], 'method' => 'delete', 'id' => "form".$unDoc->id]) !!}
                        <button type="submit" id="{{ $unDoc->id }}" class="jsDeleteButton btn btn-danger btn-circle "<i class="fa fa-times"> </i>Supprimer</button>
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

@endsection
