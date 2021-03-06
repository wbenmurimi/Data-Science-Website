@extends('layouts.app')

@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Data Science</h1>
        <div class="row center">
          <h5 class="header col s12 light">Welcome to Carnegie Mellon University Rwanda Data Science Club</h5>
      </div>
      <div class="row center">
      </div>
      <br><br>

  </div>
</div>
<div class="parallax"><img src="http://localhost:8000/background1.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="">
    <div class="row">
    <div id="map">

                    </div>
        <!-- Start of post column-->
        <div class="col m4 l4">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-action cmu">
                        <a  href="#" class="white-text">We value your feedback. Help us give the best user experience by commenting below</a>
                    </div>
                    <div class="card-content">
                     
                        <form class=" " role="form" method="POST" action="{{ url('/post-comment') }}">
                            {{ csrf_field() }}
                            <input id="longitude"  type="text" class="form-control" hidden="" name="longitude" value="">
                            <input id="latitude"  type="text" class="form-control" hidden="" name="latitude" value="">
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
                                    <!-- <textarea id="textarea1" class="materialize-textarea"></textarea> -->
                                     <input id="message" type="text" class="form-control" name="message" value="{{ old('message') }}" required >
                                    <label for="textarea1">Message</label>
                                    @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col l12">
                                    <button type="submit" class="waves-effect waves-light btn cmu pull-right">
                                        Post comment
                                    </button>                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of post form-->
        <!-- Start of comment column-->
        <div class="col m5 l5">
            <ul>
             <li>
                    <div class="card-stacked">
                        <div class="card horizontal">
                            <div class="card-stacked">
                                <div class="card-action cmu2 white-text">
                                    <a href="#" class="white-text">MTN network is down at Kacyiru</a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits  <a class="modal-trigger" href="#modal1">Read more..</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @foreach($comments as $comment)
                <li>
                    <div class="card-stacked">
                        <div class="card horizontal">
                            <div class="card-stacked">
                                <div class="card-action cmu2 white-text">
                                    <a href="#" class="white-text">{{ str_limit($comment->subject, $limit = 40, $end = '...') }}</a>
                                    <span class="pull-right">{{ $comment->created_at }}</span>
                                </div>
                                <div class="card-content">
                                    <p>{{ tr_limit($comment->message, $limit = 100, $end = '...') }} <a class="modal-trigger" href="#modal1">Read more..</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
               @endforeach 
            </ul>
            <center>
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    {!! $comments->links() !!}
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </center>
        </div>
        <!-- end of comments-->
        <!-- Guest speaker column-->
        <div class="col l3 m3 s12 m12 offset-m0">
            <ul class="collapsible">
                <li class="active">
                    <div class="collapsible-header active"><i class="mdi-av-web"></i>Speaker 1</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>

                </li>
                <li>
                    <div class="collapsible-header"><i class="mdi-av-web"></i>Speaker 2</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>

                </li>
                <li>
                    <div class="collapsible-header"><i class="mdi-av-web"></i>Speaker 3</div>
                    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>

                </li>
            </ul>
        </div>
        <!-- end of guest speaker-->
        <!-- Modal to open comment details-->
        <!-- Modal Structure -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-header">
                <h5>MTN network is down at Kacyiru</h5>
            </div>
            <div class="modal-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
                <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
            </div>
        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
          <div class="container">
            <div class="row center">
              <h5 class="header col s12 light">We value your feedback. Help us give the best user experience by commenting above</h5>
          </div>
      </div>
  </div>
  <div class="parallax"><img src="http://localhost:8000/background2.jpg" alt="Unsplashed background img 2"></div>
</div>
@endsection
