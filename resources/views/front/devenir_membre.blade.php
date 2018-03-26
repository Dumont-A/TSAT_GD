@extends('front.template');
@section('title')
  Infos Praiques
@stop
@section('subtitle')
  Devenir Membre - Vue faite pour le moment par Hugo Buffard
@stop

{!!Form::open(['route' => 'promotions.store']) !!}
        {!! Form::text('libelle', 'nom promo') !!}
        {!! Form::select('statut',$lesStatuts) !!}
        {!!Form::submit('ok')!!}
{!! Form::close() !!}
