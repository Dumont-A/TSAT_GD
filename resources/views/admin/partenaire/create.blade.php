@extends('layout_back')

@section('title')
<h1>
    Ajout d'un partenaire
    <small>- ajoute un partenaire</small>
</h1>
@stop

@section('content')

{!! Form::open(['route' => "partenaire.store",'files' => true, 'method' => 'post']) !!}
<div class="form-group">
    <label>Nom du parenaire : </label>
    <input class="form-control" placeholder="le nom du partenaire" name="name">
</div>

<div class="form-group">
    <label>Description du parenaire : </label>
    <input class="form-control" placeholder="Une description du partenaire" name="description">
</div>

<div class="form-group">
    <label>Ville du parenaire : </label>
    <input class="form-control" placeholder="la ville du partenaire" name="ville">
</div>

<div class="form-group">
    <label>Code postal ddu parenaire : </label>
    <input class="form-control" placeholder="le code postal du partenaire" name="cp">
</div>

<div class="form-group">
    <label>Adresse du parenaire : </label>
    <input class="form-control" placeholder="l'adresse du partenaire" name="adresse">
</div>

<div class="form-group">
    <label>Telephone du parenaire : </label>
    <input class="form-control" placeholder="le telephone du partenaire" name="tel">
</div>

<div class="form-group">
    <label>Lien du site du parenaire : </label>
    <input class="form-control" placeholder="le site du partenaire si il y a" name="site">
</div>

<div class="form-group">
    <label>Lien de la page Facebook du parenaire : </label>
    <input class="form-control" placeholder="le facebook du partenaire si il y a " name="fb">
</div>

<div class="form-group">
    <label>Lien du Twitter du parenaire : </label>
    <input class="form-control" placeholder="le twitter du partenaire si il y a" name="twitter">
</div>

<div class="form-group">
    <label>Ajouter un logo :</label>
    <input type="file" name="logo">
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