@extends('front.template')
@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">

          <div class="panel-heading">Identifiant</div>


          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <label for="email" class="col-md-4 control-label">Adresse e-mail</label>


                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">

                  <button type="submit" class="btn btn-primary">
                    Connexion
                  </button>

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    Mot de passe oublié?

                  </a>
                </div>
              </div>
            </form>
          </div>
=======
<div class="modal fade" id="modalConnect" role="dialog">
  <div class="modal-dialog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="panel-heading">Connexion</div>
                    <div class="panel-body">
                  </div>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Adresse e-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
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

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Adresse e-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                    <a class="btn btn-primary" id="btnTest">
                                        button test
                                    </a>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Mot de passe oublié?
                                    </a>
                                </div>
                                </a>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
>>>>>>> 3587d38cba5af582857467dcac47afd38c6e4b30
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD
=======
</div>
>>>>>>> 3587d38cba5af582857467dcac47afd38c6e4b30
>>>>>>> 9d85b469c23e369df28cf4a9852e4d3973cd09a2
@endsection
 <!-- Modal -->
 <div class="modal fade" id="modal" role="dialog">
   <div class="modal-dialog">
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4><span class="glyphicon glyphicon-lock"></span>Se connecter</h4>
       </div>
       <div class="modal-body">
         <form role="form">
           <div class="form-group">
             <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
             <input type="text" class="form-control" id="usrname" placeholder="Enter email">
           </div>
           <div class="form-group">
             <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
             <input type="text" class="form-control" id="psw" placeholder="Enter password">
           </div>
           <div class="checkbox">
             <label><input type="checkbox" value="" checked>Remember me</label>
           </div>
           <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
         </form>
       </div>
       <div class="modal-footer">
         <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
         <p>Not a member? <a href="#">Sign Up</a></p>
         <p>Forgot <a href="#">Password?</a></p>
       </div>
     </div>
   </div>
 </div>
</div>
@section('scripts')
<script>
$(document).ready(function(){
    $("#connect").click(function(){
        $("#modal").modal();
    });
});
</script>
@endsection
