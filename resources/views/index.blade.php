@extends('layouts.temp')

@section('content')
     <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{ asset('theme/img/slider/slider1.jpg')}}" alt="" title="#slider-direction-1" />
        {{-- <img src="{{ asset('theme/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
        <img src="{{ asset('theme/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" /> --}}
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Find Housing Agent Around Your Area or Anywhere in Nigeria </h2>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="{{route('register')}}">Register As Agent</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security & Peace of Mind for Your Family</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Slider -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">

        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>About Us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-left">
                <div class="single-well">
                  <a href="#">
                    <img src="{{ asset('theme/img/about/1.jpg')}}" alt="">
                  </a>
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="well-middle">
                <div class="single-well">
                  <a href="#">
                    <h4 class="sec-head">project Maintenance</h4>
                  </a>
                  <p>
                    Redug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure aspernatur sit adipisci quaerat unde at nequeRedug Lagre dolor sit amet, consectetur adipisicing elit. Itaque quas officiis iure
                  </p>
                  <ul>
                    <li>
                      <i class="fa fa-check"></i> Interior design Package
                    </li>
                    <li>
                      <i class="fa fa-check"></i> Building House
                    </li>
                    <li>
                      <i class="fa fa-check"></i> Reparing of Residentail Roof
                    </li>
                    <li>
                      <i class="fa fa-check"></i> Renovaion of Commercial Office
                    </li>
                    <li>
                      <i class="fa fa-check"></i> Make Quality Products
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End col-->
          </div>
        </div>
      </div><!-- End About Section -->
  
      <!-- ======= Services Section ======= -->
      <div id="services" class="services-area area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline services-head text-center">
                <h2>Our Services</h2>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <!-- Start Left services -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-code"></i>
                    </a>
                    <h4>Expert Coder</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-camera-retro"></i>
                    </a>
                    <h4>Creative Designer</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <!-- end col-md-4 -->
              <div class=" about-move">
                <div class="services-details">
                  <div class="single-services">
                    <a class="services-icon" href="#">
                      <i class="fa fa-wordpress"></i>
                    </a>
                    <h4>Wordpress Developer</h4>
                    <p>
                      will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                    </p>
                  </div>
                </div>
                <!-- end about-details -->
              </div>
            </div>

          </div>
        </div>
      </div><!-- End Services Section -->
  
      <!-- ======= Skills Section ======= -->
      {{-- <div class="our-skill-area fix hidden-sm">
        <div class="test-overly"></div>
        <div class="skill-bg area-padding-2">
          <div class="container">
            <!-- section-heading end -->
            <div class="row">
              <!-- single-skill start -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input type="text" class="knob" value="0" data-rel="95" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                    <h3 class="progress-h4">Web Design</h3>
                  </div>
                </div>
              </div>
              <!-- single-skill end -->
              <!-- single-skill start -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input type="text" class="knob" value="0" data-rel="85" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                    <h3 class="progress-h4">Graphics Design</h3>
                  </div>
                </div>
              </div>
              <!-- single-skill end -->
              <!-- single-skill start -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                    <h3 class="progress-h4">Php Developer</h3>
                  </div>
                </div>
              </div>
              <!-- single-skill end -->
              <!-- single-skill start -->
              <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                <div class="single-skill">
                  <div class="progress-circular">
                    <input type="text" class="knob" value="0" data-rel="65" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
                    <h3 class="progress-h4">Java Script</h3>
                  </div>
                </div>
              </div>
              <!-- single-skill end -->
            </div>
          </div>
        </div>
      </div> --}}
      <!-- End Skills Section -->
  
      <!-- ======= Contact Section ======= -->
      <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
          <div class="contact-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Contact us</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-mobile"></i>
                    <p>
                      Call: +234 816 7927 876<br>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-envelope-o"></i>
                    <p>
                      Email: adeoyetemitayo99@gmail.com<br>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
            
            </div>
            <div class="row">
  
              <!-- Start Google Map -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Map -->
              </div>
              <!-- End Google Map -->
  
              <!-- Start  contact -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form contact-form">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>
              </div>
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div><!-- End Contact Section -->
  </main>
@endsection