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
                <!-- Start of location column-->
                <div class="col m6 offset-m0">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-action cmu ">
                                <a  href="#" class="white-text">Visit our campus</a>
                            </div>
                            <div class="card-content">
                            <p class="text-black">Google maps location goes here</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.520720455665!2d30.087424814296668!3d-1.944549998582318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca694b54a0c65%3A0xcff0b2d62bf4606!2sCarnegie+Mellon+University!5e0!3m2!1sen!2srw!4v1474730173790" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of location-->
                <!-- Start of post column-->
                <div class="col m6 offset-m0">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-action cmu white-text">
                                <a  href="#" class="white-text">Reach to us by sending your message below</a>
                            </div>
                            <div class="card-content z-depth-2 " >
                                <form class=" " role="form" method="POST" action="{{ url('/contact-us-email') }}">
                                    {{ csrf_field() }}

                                    <div class=" form-group  {{ $errors->has('name') ? ' has-error' : '' }}">

                                        <div class="input-field col m12 s12">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                            <label for="name" class="">Name</label>
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class=" form-group  {{ $errors->has('email') ? ' has-error' : '' }}">

                                        <div class="input-field col m12 s12">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            <label for="email" class="">E-Mail Address</label>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class=" form-group  {{ $errors->has('subject') ? ' has-error' : '' }}">

                                        <div class="input-field col m12 s12">
                                            <input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" required autofocus>
                                            <label for="subject" class="">Subject</label>
                                            @if ($errors->has('subject'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('subject') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class=" form-group  {{ $errors->has('message') ? ' has-error' : '' }}">             
                                        <div class="input-field col m12 s12">
                                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                                            <label for="textarea1">Message</label>
                                            @if ($errors->has('message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col m8 offset-m0">
                                            <button type="submit" class="waves-effect waves-light btn right cmu">
                                                Send message
                                            </button>                    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of contact us form-->

            </div>
        </div>
    </div>
    <br><br>

</div>
</div>
<div class="parallax"><img src="http://localhost:8000/background1.jpg" alt="Unsplashed background img 1"></div>
</div>

@endsection
