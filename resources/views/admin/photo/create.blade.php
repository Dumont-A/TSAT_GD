@extends('layout_back')

@section('title')
<h1>
    Upload d'images
    <small>- ajoute des images dans la galerie</small>
</h1>
@stop

@section('content')

{!! Form::open(['route' => "photo.store",'files' => true, 'method' => 'post']) !!}
<input type="hidden" name="album_id" value="{{$album->id}}" />
<div class="form-group">
    <label>Nom de l'image : </label>
    <input class="form-control" placeholder="Mon image" name="name">
</div>

<div class="form-group">
    <label>Description de l'image : </label>
    <input class="form-control" placeholder="Une description" name="description">
</div>


<div class="form-group">
    <label>Parcourir image :</label>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"  src="{!! route('elfinder.index') !!}"></iframe>

    </div>

</div>
<button type="submit" class="btn btn-success">Créer</button>
<button type="reset" class="btn btn-danger">Effacer le formulaire</button>



{!! Form::close() !!}

@stop
@section('script')
  <script>
  $('<div \>').dialog({modal: true, width: "80%", title: "Select your file", zIndex: 99999,
         create: function(event, ui) {
             $(this).elfinder({
                 resizable: false,
                 url: "path to connector",
                 commandsOptions: {
                   getfile: {
                     oncomplete: 'destroy'
                   }
                 },
                 getFileCallback: function(file) {
                     document.getElementById('fileurl').value = file;
                     jQuery('a.ui-dialog-titlebar-close[role="button"]').click();
                 }
             }).elfinder('instance')
         }
     });
  </script>
@stop
