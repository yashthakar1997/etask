<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link href="{{ asset('assets/css/materialize.min.css') }}" media="screen,projection" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/animate.css') }}" media="screen,projection" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/hover-min.css') }}" media="screen,projection" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/custom.css') }}" media="all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" media="screen,projection" rel="stylesheet" type="text/css" />

        <title>eMaintenance</title>
    </head>
    <body class="index_page">
           <div class="main" id="main">
  <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper red darken-1 ">
        <div class="container ">
          <ul class="nav ">
           <li><a href="#main" class="brand-logo text-darken-4 animated slideInLeft">eMaintenance</a></li>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <a class="right amber lighten-1 modal-trigger hvr-grow-shadow index_login_btn" href="#loginForm" > <span>Login</span><i class="material-icons right red-text animated rollIn ">account_circle</i></a>
            <ul class="right hide-on-med-and-down nav">
              <!-- <li><a href="#">Complains</a></li> -->
              <li><a href="#product">Product</a></li>
              <li><a href="#footer">Contact Us</a></li>                          
            </ul>            
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#product">Product</a></li>
              <li><a href="#footer">Contact Us</a></li>
              <!-- Modal Trigger -->
              <li><a class="btn deep-purple accent-4 lighten-1 modal-trigger" href="#loginForm">Login<i class="material-icons right">account_circle</i></a></li>
            </ul>
          </ul>
        </div>
      </div>
    </nav>
    </div>

    
    
  <!-- carousel-slider -->
  <section class="carousel_section">
      <div class="slider">
          <ul class="slides">
            <li>
              <img src="{{ asset('assets/images/slider1.jpg') }}"> 
              <div class="caption center-align">
                <h3>Welcome to eMaintenance</h3>
                <h5 class="light grey-text text-lighten-3">We make your oy vey go away.</h5>
              </div>
            </li>
            <li>
              <img src="{{ asset('assets/images/slider2.jpg') }}">
              <div class="caption left-align">
                <h3>Use eMaintenance to</h3>
                <h5 class="light grey-text text-lighten-3">Digitize your work,Eliminate manual work,Move Fast</h5>
              </div>
            </li>
            <li>
              <img src="{{ asset('assets/images/slider3.jpg') }}">
              <div class="caption right-align">
                <h3>Whatever the condition is</h3>
                <h5 class="light grey-text text-lighten-3">If its broken, if its cracked, if its rotted, We can fix it.</h5>
              </div>
            </li>
            <li>
              <img src="{{ asset('assets/images/slider4.jpg') }}">
              <div class="caption center-align">
                <h3>eMaintenance</h3>
                <h5 class="light grey-text text-lighten-3">For all your large and small repair and maintenance needs.</h5>
              </div>
            </li>            
          </ul>
          <!-- <a class="register_now_btn btn btn-large waves-effect waves-light amber accent-4 darken-2 pulse modal-trigger" href="#register_form">Register Now!!!</a> -->
        </div>                 
  </section>    

  
  <div class="section white">
      <div class="row container">
              <h4 class="center promo">Our Services</h4>
              <p class="center">Transperency Work with proper Notifications</p>
              <div class="row">

              </div>
      </div>
  </div>

  <div class="parallax-container">
      <div class="parallax"><img src="{{ asset('assets/images/parax1.jpg') }}">
      </div>
    </div>
    <div class="section white section scrollspy" id="product">
      <div class="row container">
        <div class="section">
          <h4 class="center promo ">Product Description</h4>
          <div class="divider"></div>
          <p class="center"></p>
              <div class="row">
                <div class="col s12 m4">
                  <div class="center hvr-float-shadow promo promo-example">
                    <i class="large material-icons">flash_on</i>
                    <p class="promo-caption ">Speeds up Maintenance</p>
                    <p class="light center">The maintenance work is carried out by the Experts of their department in the college hence the developent is done faster.</p>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="center hvr-float-shadow promo promo-example">
                    <i class="large material-icons">group</i>
                    <p class="promo-caption">User Experience Focused</p>
                    <p class="light center">By utilizing elements and principles of College environment, we were able to create a framework that focuses on User Experience.</p>
                  </div>
                </div>
                <div class="col s12 m4">
                  <div class="center hvr-float-shadow promo promo-example">
                    <i class="large material-icons">settings</i>
                    <p class="promo-caption">Easy to work with</p>
                    <p class="light center">We have provided detailed documentation as well as proper examples to help new users get started.</p>
                  </div>
              </div>
            </div>
            </div>
      </div>
    </div>

    <div class="parallax-container">
      <div class="parallax"><img src="{{ url('/assets/images/parax2.jpg') }}"></div>
    </div>

    <div class="section white section scrollspy " id="product">
        <div class="row container">
          <div class="section ">
            <h4 class="center promo ">Wanna Try eMaintenance</h4>
            <div class="section"></div>
            <p class="center"></p>
                <div class="row">
                  <div class="col s12 m6">
                    <div class="">
                     <button class="btn btn-large deep-purple accent-4 lighten-1 waves-effect waves-light full-width" onclick="Materialize.toast('@ 9099163316', 4000,'rounded')" type="submit">Call Now</button>
                     
                    </div>
                  </div>
                  <div class="col s12 m6">
                    <div class="center promo promo-example">
                    <button class="btn btn-large full-width waves-effect waves-light grey darken-2" onclick="Materialize.toast('@ yashthakar1997@gmail.com', 4000,'rounded')" type="submit">Email NOW</button>
                    </div>
                  </div>
              </div>
              </div>
        </div>
      </div>

  <footer class="page-footer amber darken-1" id="footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Online Maintenance</h5>
            <p class="grey-text text-lighten-4">Where the maintenance work is carried out online</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Developers</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Yash Thakar</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Parth Chaudhary</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Harshil Jadav</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Barot Neel</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container ">
        &copy; 2018 Copyright eMaintenance
        <a class="grey-text text-lighten-4 right animated pulse infinite" href="#!">Internal Guide Harshad Chaudhary</a>
        </div>
      </div>
    </footer>
      <!-- Modal Structure -->

    <!-- login modal -->
    <form class="col s12" id="login" method="post" action="#">
    <div id="loginForm" class="modal bottom-sheet index_page_login_form">
      <div class="modal-content">
        <h4>Enter Credentials</h4>
        <div class="row">
          
            <div class="row">
              <div class="input-field col m6 s12">
                <i class="material-icons prefix">email</i>
                <input id="User_email" name="user_email" type="email" class="validate">
                <label for="User_email" data-error="wrong" data-success="">Email</label>
              </div>
              <div class="input-field col m6 s12">
                <i class="material-icons prefix">fingerprint</i>
                <input id="User_password" name="user_password" type="password" class="validate">
                <label for="User_password">Password</label>
              </div>
            </div>
          
        </div>              
      </div>
      <div class="modal-footer">
        <input name="login" class="waves-effect waves-green btn-flat" type="submit" value="Login">
        <!-- <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Login</a> -->
      </div>
     </div>
    </form>
            <!-- 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
      <script src="{{ asset('assets/js/jquery.js') }}" type="text/javascript" /></script>
      <script src="{{ asset('assets/js/materialize.min.js') }}" type="text/javascript" /></script>
      <script src="{{ asset('assets/js/main.js') }}" type="text/javascript" /></script>
    </body>
</html>
