@extends('layouts.app')

@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h4 class="header center teal-text text-lighten-2">Carnegie Mellon University Rwanda Data Science Club</h4>
        <div class="row center">
          <div class="">
            <div class="row">
                
                <!-- Start of chat column-->
                <div class="col m8 offset-m2 ">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-action cmu">
                                <a  class="white-text" href="#">Chat with the club members</a>
                            </div>
                            <div class="card-content z-depth-2 " >
                                <!-- <form class=" " role="form" method="POST" action="#"> -->
                                    {{ csrf_field() }}
 
                                    <div class=" form-group  {{ $errors->has('message') ? ' has-error' : '' }}">             
                                        <div class="input-field col m12 s12">
                                           <input id="message" type="text" class="form-control" name="message" value="{{ old('message') }}" required >
                                            <label for="message">Message</label>
                                            @if ($errors->has('message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col l12 m12 ">
                                            <button type="submit" class="waves-effect waves-light btn pull-right cmu">
                                                Send 
                                            </button>                    
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of chat column-->

            </div>
        </div>
    </div>
    <br><br>

</div>
</div>
<div class="parallax"><img src="http://localhost:8000/background1.jpg" alt="Unsplashed background img 1"></div>
</div>

@endsection
