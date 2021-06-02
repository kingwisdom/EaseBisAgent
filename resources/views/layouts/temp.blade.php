<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EaseBis - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('theme/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('theme/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('theme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('theme/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('theme/css/style.css')}}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>ease</span>Bis</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ request()->is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
          <li class="{{ request()->is('#about') ? 'active' : ''}}"><a href="#about">About</a></li>
          <li class="{{ request()->is('#contact') ? 'active' : ''}}"><a href="#contact">Contact</a></li>
          {{-- <li><a href="{{route('login')}}">Login</a></li>
          <li><a href="{{route('register')}}">Register</a></li> --}}

          @auth
            
            <li class="drop-down">
              <a href="">
                {{ Auth::user()->name }}
              </a>
              <ul>
                
                @if(auth()->user()->is_admin == 1)
                  <li><a href="{{route('allAgents')}}" class="dropdown-item">Dashboard</a> </li>
                @else
                    {{-- <a class="dropdown-item" href="{{route('property.index')}}">My Dashboard</a> --}}
                    <li> <a href="{{route('agent.dashboard')}}" class="dropdown-item">Be An Agent</a> </li>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                 <li> <a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                  this.closest('form').submit();">
                      {{ __('Log Out') }}
                  </a> </li>
                </form>

              </ul>
            </li>
          @else
            <li>
              <a href="{{ route('login') }}">Login</a>
            </li>

            @if (Route::has('register'))
               <li> <a href="{{ route('register') }}">Register</a> </li>
            @endif
          @endauth
          
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
 

    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>ease</span>Bis</h2>
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                
                <div class="footer-contacts">
                  <p><span>Tel:</span> +234 816 792 7876</p>
                  <p><span>Email:</span> adeoyetemitayo99@gmail.com</p>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Kingwisdom</strong>. 
              </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('theme/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('theme/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('theme/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('theme/vendor/appear/jquery.appear.js')}}"></script>
  <script src="{{ asset('theme/vendor/knob/jquery.knob.js')}}"></script>
  <script src="{{ asset('theme/vendor/parallax/parallax.js')}}"></script>
  <script src="{{ asset('theme/vendor/wow/wow.min.js')}}"></script>
  <script src="{{ asset('theme/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('theme/vendor/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{ asset('theme/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('theme/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('theme/js/main.js')}}"></script>

</body>

</html>