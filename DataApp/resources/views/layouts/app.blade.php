<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <!-- <link href="/css/app.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}"> 
  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      ]); ?>
    </script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57e5bf9489c7acbf"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57e5bf9489c7acbf"></script> -->


  </head>
  <body>
    @yield('navigation')
    <div class="navbar-fixed">
      <nav class="cmu">
        <div class="nav-wrapper">
          <a class="brand-logo" href="{{ url('/') }}">
            {{ config('app.name', 'Data') }}
          </a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}"> Home</a></li>
            <li><a href="{{ url('/about-us') }}">About us</a></li>
            <li><a href="{{ url('/members') }}"> Members</a></li>
            <li><a href="{{ url('/chat') }}">Chat </a></li>
            <li><a href="{{ url('/contact-us') }}"> Contact us </a></li>
            <!-- Authentication Links -->
            @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
            @else
            <li >
              <a class="dropdown" href='#' data-activates='dropdown1'>
              {{ Auth::user()->fName }} <i class="material-icons right">arrow_drop_down</i>
              </a>

              <ul id='dropdown1' class='dropdown-content'>
               <li class="divider"></li>
               <li class="cmu">
                 <a href="{{ url('/member-profile') }}" class="white-text">Profile </a>
               </li>
               <li class="divider"></li>
               <li class="cmu">
                <a href="{{ url('/logout') }}" class="white-text"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endif
      </ul>
      <ul class="side-nav cmu" id="mobile-demo">
       <li class=""><a  class="white-text" href="{{ url('/') }}"><i class="material-icons left white-text">contact_phone</i> Home</a></li>
       <li class=""><a class="white-text" href="{{ url('/about-us') }}"><i class="material-icons left white-text">group_work</i> About us</a></li>
       <li><a  class="white-text" href="{{ url('/members') }}"><i class="material-icons left white-text">perm_identity</i> Members</a></li>
       <li><a  class="white-text" href="{{ url('/chat') }}"><i class="material-icons left white-text">chat_bubble</i> chat</a></li>
       <li><a  class="white-text" href="{{ url('/contact-us') }}"> <i class="material-icons left white-text">contact_phone</i> Contact us</a></li>
     </ul>
   </div>
 </nav>
</div>

@yield('content')
<a class="darken-2 scrollToTop btn-floating btn-large waves-effect waves-light "><i class="fa-btn fa fa-angle-double-up"></i></a>

@yield('mainfooter')

<footer class="page-footer cmu" >
 <div class="cmu">
  <div class="container cmu">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Carnegie Mellon Data Science Club</h5>
        <p class="grey-text text-lighten-4">We analyse customer feedback to improve user experience.</p>
      </div>
      <div class="col l3 s6 m6 offset-l0 ">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="{{ url('/') }}">Home</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/about-us') }}">About us</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/members') }}">Members</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/contact-us') }}">Contact us</a></li>
        </ul>
      </div>
      <div class="col l3 s6 m6 offset-l0 ">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="{{ url('/') }}">Home</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/about-us') }}">About us</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/members') }}">Members</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ url('/contact-us') }}">Contact us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2016 Copyright
      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</div>
</footer> 

@yield('jsimport')
<!-- Scripts -->
<!-- <script src="/js/app.js"></script> -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/google-map.js') }}"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
<script>tinymce.init({ selector:'textarea' });</script>

<script type="text/javascript">
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
    $('.dropdown').dropdown();
    $('select').material_select();
  });
</script>
</body>
</html>
