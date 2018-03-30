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
    <input type="file" id="feature_image" name="feature_image">

    <label for="feature_image">Feature Image</label>
    <input type="text" id="feature_image" name="feature_image" value="">
    <a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
</div>
<button type="submit" class="btn btn-success">Créer</button>
<button type="reset" class="btn btn-danger">Effacer le formulaire</button>
{!! Form::close() !!}
<!--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Uploading Image using dropzone.js and Laravel</h1>
                {!! Form::open([ 'route' => "photo.store", 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'book-image' ]) !!}
                <div>
                    <h3>Upload Image</h3>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>-->







@stop
