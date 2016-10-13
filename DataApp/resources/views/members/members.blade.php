@extends('layouts.app2')

@section('content')
<div class="">
    <div class="row">
        <div class="col m12 offset-m0">
            <div id="skrollr-body">
                <div id="non-skrollr">
                   <div class="container-fluid card  z-depth-2 waves-effect waves-light">
                    <div class="cover z-depth-1" style="background-image: url('http://localhost:8000/background2.jpg');">
                        <div class="filter " style="opacity: 0.7;">
                            <div class="cover-text text-darken-4">
                                <span style="font-size: 50px;">< Club members profiles /></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content cmu2 white-text">
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
        <div class="row">
            <div class="scroll-1">
                <div class="container-fluid card  z-depth-2 waves-effect waves-light">
                    <div class="cover z-depth-1" style="">
                        <div class="filter ">
                            <div class="cover-text -text text-darken-4">

                               <div class="row ">
                                <div class="col l3 red">
                                    <img src="http://localhost:8000/7.jpg">
                                </div>
                                <div class="col l9">
                                  Benjamin Munyoki
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-content cmu white-text">
                <div class="card-title">MSIT class of 2018.</div>
                <b>Get an account on GitHub,</b> and verify your email. Remember that the username you choose will be the domain name of your website (unless you want to pay for a .com or something). Click on the button below to see detailed instructions regarding how you can accomplish this without getting your dick caught on a ceiling fan (or an oven, for that matter).
            </div>
            <div class="card-action  darken-2">
               <button href="" class="darken-1 white-text text-darken-3 waves-effect waves-light btn">Facebook</button>
               <button class=" darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Twitter</button>
           </div>
       </div>
   </div> 
   @foreach($profiles as $profile)

   <div class="scroll-1">
    <div class="container-fluid card  z-depth-2 waves-effect waves-light">
        <div class="cover z-depth-1"  style="">
            <div class="filter ">
                <div class="cover-text -text text-darken-4">
                    <div class="row ">
                        <div class="col l3 ">
                        Hi
                        </div>
                        <div class="col l9">
                            {{ $profile->fName }}  {{ $profile->LName }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-content cmu white-text">
            <div class="card-title">{{ $profile->year_group }}</div>
           {!! $profile->profile !!}.
        </div>
        <div class="card-action  darken-2">
            <p class="darken-1 white-text text-darken-3 waves-effect ">{{ $profile->email }}</p>
        </div>
    </div>
</div>
@endforeach

</div> 
</div>

</div>
</div>
@endsection


 
