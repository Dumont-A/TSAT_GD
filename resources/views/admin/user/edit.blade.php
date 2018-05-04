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

{!! Form::label('commentaire', 'commentaire') !!}
{!! Form::textarea('commentaire', $leUser->commentaire, ['class'=> 'form-control', 'rows' => "3"] ) !!}









<div class="form-group{{ $errors->has('est_joueur') ? ' has-error' : '' }}">
    <label for="est_joueur" class="col-md-4 control-label">Est-il un joueur?</label>

    @if ( $leUser->est_joueur == 1)
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_joueur" checked >
@else

            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_joueur" >
@endif

        @if ($errors->has('est_joueur'))
        <span class="help-block">
            <strong>{{ $errors->first('est_joueur') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('est_arbitre') ? ' has-error' : '' }}">
    <label for="est_arbitre" class="col-md-4 control-label">Est-il un arbitre?</label>

    @if ( $leUser->est_arbitre == 1)
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_arbitre" checked >
@else

            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_arbitre" >
@endif

        @if ($errors->has('est_arbitre'))
        <span class="help-block">
            <strong>{{ $errors->first('est_arbitre') }}</strong>
        </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('est_admin') ? ' has-error' : '' }}">
    <label for="est_admin" class="col-md-4 control-label">Est-il un administrateur?</label>



@if ( $leUser->est_admin == 1)
            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_admin" checked >
@else

            <div class="checkbox">
                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_admin" >
@endif
                @if ($errors->has('est_admin'))
                <span class="help-block">
                    <strong>{{ $errors->first('est_admin') }}</strong>
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
