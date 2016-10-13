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
        <div class="col m12 offset-m0">
            <div id="skrollr-body">
                <div id="non-skrollr">
                   <div class="container-fluid card  z-depth-2 waves-effect waves-light">
                    <div class="cover z-depth-1" style="background-image: url('{{http://localhost:8000/background2.jpg');">
                        <div class="filter " style="opacity: 0.7;">
                            <div class="cover-text text-darken-4">
                                <span style="font-size: 50px;">< About Data Science Club /></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content cmu white-text">
                        <div class="card-title">
                        </div>
                        <h5>Data Scrappers</h5>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel purus sagittis, eleifend ante quis, tempus lectus. Vivamus maximus nibh lectus, sed gravida sapien imperdiet in.
                        <br>
                        <h5>Software Engineers</h5>
                        Curabitur non purus rutrum, iaculis mauris ac, placerat turpis. Donec vel semper enim, ut ultrices sem. Fusce rutrum, justo id porta malesuada, purus erat gravida metus, sit amet viverra turpis lacus nec mi. Aliquam et mi vel ipsum mollis aliquam eu eget augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        <br>
                        <h5>Data analysits</h5>
                        Aliquam vel purus sagittis, eleifend ante quis, tempus lectus. Vivamus maximus nibh lectus, sed gravida sapien imperdiet in. Curabitur non purus rutrum, iaculis mauris ac, placerat turpis. Donec vel semper enim, ut ultrices sem.
                        Fusce rutrum, justo id porta malesuada, purus erat gravida metus, sit amet viverra turpis lacus nec mi. Aliquam et mi vel ipsum mollis aliquam eu eget augue.
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
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 2"></div>
  </div>
  </div>
@endsection
