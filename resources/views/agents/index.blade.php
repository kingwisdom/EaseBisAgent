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
                  <h1 class="title2">Agents</h1>
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
                  <h4>categories</h4>
                  <ul>
                    <li>
                      <a href="#">Portfolio</a>
                    </li>
                    <li>
                      <a href="#">Project</a>
                    </li>
                    <li>
                      <a href="#">Design</a>
                    </li>
                  </ul>
                </div>
              </div>
      
              
            </div>
          </div>
          <!-- End left sidebar -->
          
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>All Agents</h4>
                  <div class="recent-post">

                    @if (count($res) > 0)
                    <!-- start single post -->
                    @foreach ($res as $item)
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                            @if($item->photoUrl)
                            <img src="{{ asset('storage/'.$item->photoUrl) }}" alt="{{$item->fullName}}">
                            @else
                            <img src="{{ asset('images/no-image.jpg') }}" alt="">
                            @endif
                        </a>
                      </div>
                      <div class="pst-content">
                          <h3>{{$item->fullName}}</h3>
                          <div class="row">
                              <div class="col-md-6 col-sm-12">
                                  <p><span>Email: </span><a href=""> {{$item->email}}</a></p>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                   <p><span>Phone: </span> <a href="#"> {{$item->phone}} </a></p>
                              </div>
                          </div>
                          
                          <div class="row">
                              <div class="col-md-6 col-sm-12">
                                  <p><span>City: </span><a href=""> {{$item->city}}</a></p>
                              </div>
                              <div class="col-md-6 col-sm-12">
                                   <p><span>State: </span> <a href="#"> {{$item->state}} </a></p>
                              </div>
                          </div>
                          
                        <p>{{$item->bio}}</p>

                        <div class="d-flex">
                          @if ($item->isActive == 1)
                          <form method="POST" action="{{ route('disapprove', $item->id) }}">
                              @csrf
                              @method('PATCH')
                              <a class="btn btn-danger mr-4" href="{{route('disapprove', $item->id)}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                  Disaprove
                              </a>
                          </form>
                          @else
                              <form method="POST" action="{{ route('approve', $item->id) }}">
                                  @csrf
                                  @method('PATCH')
                                  <a class="btn btn-success mr-4" href="{{route('approve', $item->id)}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                      Approve
                                  </a>
                              </form>
                          @endif

                          
                          @if ($item->isSuspended == 1)
                          <form method="POST" action="{{ route('unsuspend', $item->id) }}">
                              @csrf
                              @method('PATCH')
                              <a class="btn btn-success" href="{{route('unsuspend', $item->id)}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                Unsuspend
                              </a>
                          </form>
                          @else
                              <form method="POST" action="{{ route('suspend', $item->id) }}">
                                  @csrf
                                  @method('PATCH')
                                  <a class="btn btn-danger mr-4" href="{{route('suspend', $item->id)}}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Suspend
                                  </a>
                              </form>
                          @endif

                        </div>
                      </div>
                    </div>
                    @endforeach
                    <!-- End single post -->

                @endif
                  </div>
                </div>
                <!-- recent end -->
              </div>
              
            </div>
          </div>
          <!-- End left sidebar -->
          
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main>
   
@endsection