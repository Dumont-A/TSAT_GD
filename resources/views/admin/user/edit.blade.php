@extends('layout_back')

@section('title')
<h1>
    Modication d'un utilisateur
    <small>- Modication d'un utilisateur</small>
</h1>
@stop
@section('content')

{!! Form::open(['url' =>route('user.update',$leUser->id),'method' =>'put']) !!}

{!! Form::label('nom', 'nom') !!}
{!! Form::text('nom', $leUser->nom,['class'=> 'form-control'] ) !!}

{!! Form::label('prenom', 'prenom') !!}
{!! Form::text('prenom', $leUser->prenom,['class'=> 'form-control'] ) !!}

{!! Form::label('email', 'email') !!}
{!! Form::text('email', $leUser->email,['class'=> 'form-control'] ) !!}

{!! Form::label('telephone', 'telephone') !!}
{!! Form::text('telephone', $leUser->telephone,['class'=> 'form-control'] ) !!}

{!! Form::label('password', 'password') !!}
<input id="password" type="password" class="form-control" name="password" value="" >









<div class="form-group{{ $errors->has('joueur') ? ' has-error' : '' }}">
    <label for="joueur" class="col-md-4 control-label">Est-il un joueur?</label>

    @if ( $leUser->joueur == 1)
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="joueur" checked >
@else
       
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="joueur" >
@endif           

        @if ($errors->has('joueur'))
        <span class="help-block">
            <strong>{{ $errors->first('joueur') }}</strong>
        </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
    <label for="admin" class="col-md-4 control-label">Est-il un administrateur?</label>

    

@if ( $leUser->admin == 1)
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="admin" checked >
@else
       
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="admin" >
@endif           
                @if ($errors->has('admin'))
                <span class="help-block">
                    <strong>{{ $errors->first('admin') }}</strong>
                </span>
                @endif
            </div>
        </div>

<div class="form-group{{ $errors->has('valider') ? ' has-error' : '' }}">
    <label for="valider" class="col-md-4 control-label">Autorisé?</label>

   @if ( $leUser->valider == 1)
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="valider" checked >
@else
       
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="valider" >
@endif           
                @if ($errors->has('valider'))
                <span class="help-block">
                    <strong>{{ $errors->first('valider') }}</strong>
                </span>
                @endif
            </div>
        </div>
        {!! Form::submit('Valider', ['class'=> 'btn btn-info']) !!}

        {!! Form::close()!!}
        @stop
