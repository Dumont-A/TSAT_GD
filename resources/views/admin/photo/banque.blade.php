@extends('layout_back')

@section('title')
<h1>
    banque d'images
    <small>- ajoute des images dans la galerie</small>
</h1>
@stop

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  src="{!! route('elfinder.index') !!}"></iframe>
                    </div>     
        </div>

@stop