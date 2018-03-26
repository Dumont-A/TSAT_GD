@extends('layout_back')

@section('title')
<h1>
    modifier 
    <small>- modification d'un partenaire</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => ['partenaire.update', $partenaire["id"]], 'method' => 'put', 'files' => true]) !!}               
            <div class="box-header">
                <h3 class="box-title">  </h3>

                <div class="form-group">
                    <label>Nom du parenaire : </label>
                    <input class="form-control" value="{{ $partenaire["nom"] }}" name="name"> 
                </div>
                
                 <div class="form-group">
                    <label>Description du parenaire : </label>
                    <input class="form-control" value="{{ $partenaire["description"] }}" name="description"> 
                </div>
                
                 <div class="form-group">
                    <label>Ville du parenaire :  </label>
                    <input class="form-control" value="{{ $partenaire["ville"] }}" name="ville"> 
                </div>
                
                 <div class="form-group">
                    <label>Code postal du parenaire : </label>
                    <input class="form-control" value="{{ $partenaire["cp"] }}" name="cp"> 
                </div>
                
                 <div class="form-group">
                    <label>Adresse du parenaire :  </label>
                    <input class="form-control" value="{{ $partenaire["adresse"] }}" name="adresse"> 
                </div>
                
                 <div class="form-group">
                    <label>Telephone du parenaire :  </label>
                    <input class="form-control" value="{{ $partenaire["tel"] }}" name="tel"> 
                </div>
                
                 <div class="form-group">
                    <label>Lien du site du parenaire :  </label>
                    <input class="form-control" value="{{ $partenaire["site"] }}" name="site"> 
                </div>
                
                 <div class="form-group">
                    <label>Lien de la page Facebook du parenaire :  </label>
                    <input class="form-control" value="{{ $partenaire["facebook"] }}" name="fb"> 
                </div>
                
                 <div class="form-group">
                    <label>Lien du Twitter du parenaire :  </label>
                    <input class="form-control" value="{{ $partenaire["twitter"] }}" name="twitter"> 
                </div>
                
                
                <img width="70%" src="{{ url('img/partenaire') ."/". $partenaire->logo }}" alt="img{{ $partenaire["id"] }}">
                <div class="form-group">
                    <label>Ajouter un logo :</label>
                    <input type="file" name="logo">
                </div>
               
            </div>
            <!-- /.box-header -->
     

            <button type="submit" class="btn btn-success btn-lg btn-block">Modifier</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop


