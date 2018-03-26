@extends('layout_back')


@section('content')

<h1>
    DOC
    <small>- ajoute des documents</small>
</h1>

{!! Form::open(['route' => "document.store",'files' => true, 'method' => 'post']) !!}

<div class="form-group  col-md-offset-4">
    <label>Nom de l'image : </label>
    <div class="col-md-5">
        <input class="form-control" placeholder="Mon image" name="nom">
    </div>
</div>



@if(Auth::check())






<input type="hidden" name="user_id" value="" />             
<div class="form-group col-md-offset-4">
    <label>Parcourir image :</label>
    <input type="file" name="document">
</div> 
<button type="submit" class="btn btn-success col-md-offset-4">Créer</button>
<button type="reset" class="btn btn-danger col-md-offset-4 ">Effacer le formulaire</button>
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

@endif




@stop