@extends('layouts.temp')
@section('content')

<main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="home-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2 wow zoomIn animated" data-wow-duration="1s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s;">
                  <h1 class="title2">Create Agents</h1>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <ul>
                    <li>
                      <a href="#">Profile</a>
                    </li>
                  </ul>
                </div>
              </div>
      
              
            </div>
          </div>
          <!-- End left sidebar -->
          
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

            <div class="comment-respond">
                <h3 class="comment-reply-title">Update Your Profile </h3>
                <span class="email-notes">Your details will not be published on the app until you complete your infomation. Required fields are marked *</span>
               
                <form action="{{route('agent.update', $res->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <p>Name </p>
                      <input type="text" name="fullName" readonly value="{{auth()->user()->name}}"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <p>Email *</p>
                      <input type="email" name="email" readonly value="{{auth()->user()->email}}"/>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <p>Phone *</p>
                      <input type="text" required name="phone" value="{{$res->phone}}" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Company Name </p>
                        <input type="text" name="companyName" value="{{$res->companyName}}" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>Company Address </p>
                        <input type="text" name="address" value="{{$res->address}}" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>City </p>
                        <input type="text" name="city" value="{{$res->city}}" />
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p>State </p>
                        <input type="text" name="state" value="{{$res->state}}" />
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>Your Photo *</p>
                        <input type="file" name="photoUrl">
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>Your Identity  *</p>
                        <input type="file" name="idUrl">
                        <p>(Voter's card / National Identity / Driver's Licence / Internaltional Passport)</p>
                      </div>

                    
                    

                    <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                      <p>Your Bio</p>
                      <textarea id="message-box" name="bio" cols="30" rows="10" value="{{$res->bio}}"></textarea>
                      <input type="submit" value="Update Your Profile" />
                    </div>
                  </div>
                </form>
               
              </div>
            
          </div>
          <!-- End left sidebar -->
          
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main>
   
@endsection
    