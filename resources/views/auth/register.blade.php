@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
<<<<<<< HEAD
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

          <div class="panel-heading">S'enregistrer</div>


          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <label for="name" class="col-md-4 control-label">Nom</label>


                <div class="col-md-6">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <label for="email" class="col-md-4 control-label">Adresse e-mail</label>


                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
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


                <label for="password-confirm" class="col-md-4 control-label">Confirmez le mot de passe</label>


                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">

                    S'enregistrer
                  </button>
=======
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<<<<<<< HEAD
<<<<<<< HEAD
                <div class="panel-heading">Register</div>
=======
                <div class="panel-heading">S'enregistrer</div>
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f
=======
                <div class="panel-heading"><b>Devenez membre!</b></div>
>>>>>>> b7d35286a5337977438f3c1c81cee80443888cc0

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="name" class="col-md-4 control-label">Name</label>
=======
                            <label for="name" class="col-md-4 control-label">Nom</label>
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
=======
                            <label for="email" class="col-md-4 control-label">Adresse e-mail</label>
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<<<<<<< HEAD
                            <label for="password" class="col-md-4 control-label">Password</label>
=======
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f

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
<<<<<<< HEAD
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
=======
                            <label for="password-confirm" class="col-md-4 control-label">Confirmez le mot de passe</label>
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    Register
=======
                                    S'enregistrer
>>>>>>> 1f0d2016fbb1024ddf2f97cb8ab5a57270581f9f
                                </button>
                            </div>
                        </div>
                    </form>
>>>>>>> 4ebfa1eb02f2bd4df56569772da12709bc921931
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
