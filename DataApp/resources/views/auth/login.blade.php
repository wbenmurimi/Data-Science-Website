@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 offset-m2">
            <div class="card horizontal">
              <div class="card-stacked">
            <div class="card-action cmu">
                <a  href="#" class="white-text">Login</a>
                </div>
                <div class="card-content">
                    <form class=" " role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class=" form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="input-field col m12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email" class="">E-Mail Address</label>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="input-field col m12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <label for="password" class="">Password</label>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col m6 offset-m0">
                                <div class="checkbox">
                                <input type="checkbox" class="filled-in" id="remember" name="remember">
                                    <label for="remember">
                                         Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col m8 offset-m0">
                                <button type="submit" class="waves-effect waves-light btn cmu">
                                    Login
                                </button>

                                <a class="" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                     <div class="col l8 offset-l2 col-m10 offset-m1 xs12">
                        <center><h6>OR</h6></center>
                            <center><h6>Login in With One Click!</h6></center>
                            <div class="row">
                            <div class="loginSocialIcons  col l4 m4 s4 xs-12">
                             <a  style=" background-color:#3a5795; border-color:#3a5795" href="{{ url('/social/auth/redirect', ['facebook']) }}" class="waves-effect waves-light btn">
                                Facebook&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-facebook fa-1x"></i>
                            </a>
                            </div>
                            <div class="loginSocialIcons col l4 m4 s4 xs-12">
                            <a  style=" background-color:#e53935; border-color:#e53935" href="{{ url('/social/auth/redirect', ['google']) }}" class="waves-effect waves-light btn">
                             Google &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-google fa-1x"></i>
                         </a>
                         </div>
                         <div class="loginSocialIcons col l4 m4 s4 xs-12">
                         <a style=" background-color:#00aced; border-color:#00aced" href="{{ url('/social/auth/redirect', ['twitter']) }}" class="waves-effect waves-light btn">
                           Twitter&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-twitter fa-1x"></i>
                        </a>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
