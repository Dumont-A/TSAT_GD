@extends('layout_back')

@section('title')
<h1>
    Enrengistrement d'un utilisateur
    <small>- Enrengistrement d'un utilisateur</small>
</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inscription</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label for="nom" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>

                                @if ($errors->has('nom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                @if ($errors->has('prenom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('prenom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Téléphone</label>

                            <div class="col-md-6">
                                <input id="telephone" type="telephone" class="form-control" name="telephone" value="{{ old('telephone') }}" required>

                                @if ($errors->has('telephone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmation du mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('est_joueur') ? ' has-error' : '' }}">
                            <label for="joueur" class="col-md-4 control-label">Est-il un joueur?</label>

                            <div class="checkbox">
                               <input data-toggle="toggle" type="checkbox"  data-onstyle="success" name="joueur" >

                                @if ($errors->has('est_joueur'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('est_joueur') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                       <div class="form-group{{ $errors->has('est_admin') ? ' has-error' : '' }}">
                            <label for="est_admin" class="col-md-4 control-label">Est-il un administrateur?</label>

                            <div class="checkbox">
                               <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="est_admin" >

                                @if ($errors->has('est_admin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('est_admin') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('est_arbitre') ? ' has-error' : '' }}">
                             <label for="arbitre" class="col-md-4 control-label">Est-il un arbitre?</label>

                             <div class="checkbox">
                                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="arbitre" >

                                 @if ($errors->has('est_arbitre'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('est_arbitre') }}</strong>
                                 </span>
                                 @endif
                             </div>
                         </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Inscrire l'utilisateur
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
