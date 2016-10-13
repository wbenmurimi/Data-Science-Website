@extends('layouts.app')

@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Data Science</h1>
        <div class="row center">
          <h5 class="header col s12 light">Carnegie Mellon University Rwanda Data Science Club</h5>
      </div>       
  </div>
</div>
<div class="parallax"><img src="http://localhost:8000/background3.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="">
    <div class="row">
        <div class="col m12 l12">
            <div id="skrollr-body">
                <div id="non-skrollr">
                 <div class="container-fluid card  z-depth-2 waves-effect waves-light"> 
                    <div class="cover z-depth-1" style="">
                        <div class="filter " style="opacity: 0.7">
                            <div class="cover-text text-darken-4">
                                <span style="font-size: 50px">< Welcome {{ Auth::user()->fName }} /></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content cmu white-text col ">
                        <div class="card-title">
                        </div>
                        <h5>You are successfully logged in</h5>
                       This is the welcome page for the members of Carnegie Mellon Rwanda Data Science Club. Kindly go to your profile page and update your bio <a href="{{ url('/member-profile') }}">HERE</a>. Please provide posts on the home page to help us get enough data to test our models.
                        
                    </div>
                </div>
            </div>
        </div>
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
<div class="parallax"><img src="http://localhost:8000/background1.jpg" alt="Unsplashed background img 2"></div>
</div>
@endsection
