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
                            <div class="col m12 l12">
                                <button type="submit" class="waves-effect waves-light btn cmu">
                                    Login
                                </button>

                                <a class="pull-right" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
