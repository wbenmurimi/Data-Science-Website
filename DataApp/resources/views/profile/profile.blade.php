@extends('layouts.app')

@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h4 class="header center teal-text text-lighten-2">Member Profile</h4>
        <div class="row ">
          <div class="">
            <div class="row">

                <!-- Start of post column-->
                <div class="col l12 offset-m1">

                 <div class="row">
                    <div class="col s12">
                      <ul class="tabs cmu">
                        <li class="tab col s3"><a href="#test1" class="active white-text">Bio</a></li>
                        <li class="tab col s3"><a  href="#test2" class="white-text">Password</a></li>
                    </ul>
                </div>
                <div id="test1" class="col s12">
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-action cmu2">
                                <a  href="#" class="white-text">Update your member profile</a>
                            </div>
                            <div class="card-content z-depth-2 " >
                                <form class=" " role="form" method="POST" action="{{ url('/update-user-bio') }}">
                                    {{ csrf_field() }}
<<<<<<< HEAD

                                    <div class=" form-group cmu" >
                                    <!-- <label class="black-text">Year group</label> -->
                                     <select name="year_group" class="year_group"  >
                                      <option value="" disabled selected>Year group</option>
                                      <option value="MSIT class of 2018">MSIT class of 2018</option> 
                                      <option value="ECE class of 2018">ECE class of 2018</option>
                                      <option value="MSIT class of 2017">MSIT class of 2017</option>
                                      <option value="ECE class of 2017">ECE class of 2017</option>
                                  </select>
                                  </div>
                          <div class=" form-group  {{ $errors->has('bio') ? ' has-error' : '' }}">             
                            <div class="input-field col m12 s12">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1"></label>
                                @if ($errors->has('bio'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bio') }}</strong>
                                </span>
                                @endif
=======
                                    <div class=" form-group  {{ $errors->has('bio') ? ' has-error' : '' }}">             
                                        <div class="input-field col m12 s12">
                                            <textarea name="profile" id="textarea1" class="materialize-textarea"></textarea>
                                            <label for="textarea1"></label>
                                            @if ($errors->has('bio'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('bio') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col m8 offset-m0">
                                            <button type="submit" class="waves-effect waves-light btn right">
                                                Update Bio
                                            </button>                    
                                        </div>
                                    </div>
                                </form>
>>>>>>> f00b02b68983d0e99784b6e339c22bcfbc93289d
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col m12 l12">
                                <button type="submit" class="biobtn waves-effect waves-light btn right cmu">
                                    Update Bio
                                </button>                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="test2" class="col s12"><div class="card horizontal">
        <div class="card-stacked">
            <div class="card-action cmu2 white-text">
                <a  href="#" class="white-text">Change password</a>
            </div>
            <div class="card-content z-depth-2 " >
                <form class=" " role="form" method="POST" action="{{ url('/change-user-password') }}">
                    {{ csrf_field() }}


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="input-field col m12">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <label for="password" class=""> Current Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="input-field col m12">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <label for="password" class="">New Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div class="input-field col m12">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <label for="password" class="">Confirm Password</label>
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col m12 l12 offset-m0">
                            <button type="submit" class="waves-effect waves-light btn pull-right cmu">
                                Update Password
                            </button>                    
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
