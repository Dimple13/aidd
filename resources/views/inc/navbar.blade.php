<head>
  <title>AiDD</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900%7CPacifico' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'> 
  
  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" type="text/css" media="all" />
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" type="text/css" media="all" />

</head>  
<header id="header-bar" class="wrap">
  <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="clearfix">
          <div id="logo"><a href="#"><img class="img-responsive" src="{{asset('images/logo.png')}}" alt=""/></a>
          </div>
          {{-- <nav class="navbar navbar-custom" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-navigation"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" style="max-height: 100%;" id="collapse-navigation"> --}}
              <nav class="mobile-btn" role="navigation">
                <button type="button" class="navbar-toggle"> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
                  <span class="icon-bar"></span> 
                </button>
              </nav>
              <nav class="desktop" role="navigation">
                <div class="desktop-navigation">    
              <div><ul class="nav menu-nav">
              <li ><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                {{-- <ul class="sub-menu">
                    <li><a href="{{url('/faq')}}">FAQ</a></li>
                    <li><a href="{{url('/testimonials')}}">Testimonials</a></li>
                    <li><a href="{{url('pricing-table')}}">Pricing Table</a></li>
                    <li><a href="{{url('404-page')}}">404 Page</a></li>
                  </ul>
                
                 <li><a href="{{url('teachers')}}">Teachers</a>
                  <ul class="sub-menu">
                    <li><a href="{{url('single-teacher')}}">Single Teacher</a></li>
                  </ul>
               </li>
                <li><a href="gallery-3col.html">Galleries</a>
                  <ul class="sub-menu">
                    <li><a href="gallery-2col.html">2 Columns</a></li>
                    <li><a href="gallery-3col.html">3 Columns</a></li>
                    <li><a href="gallery-4col.html">4 Columns</a></li>
                    <li><a href="single-gallery-1.html">Single Gallery Album</a></li>
                  </ul>
                </li>
                <li><a href="events-3col.html">Events</a>
                  <ul class="sub-menu">
                    <li><a href="events-2col.html">2 Columns</a></li>
                    <li><a href="events-3col.html">3 Columns</a></li>
                    <li><a href="single-event.html">Single Event</a></li>
                  </ul>
                </li> 
                <li><a href="{{url('/blog')}}">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>--}}
                <!-- Right Side Of Navbar -->
                <li>
                    <!-- Authentication Links -->
                  @if (Auth::guest())
                    <li><a href="{{ url('/logop') }}">Login &nbsp;</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/exercises')}}">Dashboard</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                      </ul>
                    </li>
                  @endif
                </li>
              </ul>
              </div>
            </div> <!--navbar-collapse-->            
          </nav>
          <nav class="mobile">
            <ul class="mobile-items">
                <li class="mobile_item"><a href="{{url('/')}}">Home</a></li>
                <li class="about mobile_item">
                <a href="{{url('/about')}}">About</a>
                <!-- <button class="fas fa-chevron-circle-down" onclick="icon_change();"></button> -->
                </li>
                <!-- <div class="abt-menu" style="display:none;">
                    <li class="mobile_item"><a href="{{url('/faq')}}">FAQ</a></li>
                    <li class="mobile_item"><a href="{{url('/testimonials')}}">Testimonials</a></li>
                    <li class="mobile_item"><a href="{{url('pricing-table')}}">Pricing Table</a></li>
                    <li class="mobile_item"><a href="{{url('404-page')}}">404 Page</a></li>
                </div> -->
                {{-- <li class="mobile_item">
                  <a href="{{url('teachers')}}">Teachers</a>
                  <button class="fas fa-chevron-circle-down" onclick="icon_change();"></button>  
               </li>
               <div class="tr-menu">
                <li><a href="{{url('single-teacher')}}">Single Teacher</a></li>
               </div>
                <li class="mobile_item"><a href="gallery-3col.html">Galleries</a>
                  <ul class="sub-menu">
                    <li><a href="gallery-2col.html">2 Columns</a></li>
                    <li><a href="gallery-3col.html">3 Columns</a></li>
                    <li><a href="gallery-4col.html">4 Columns</a></li>
                    <li><a href="single-gallery-1.html">Single Gallery Album</a></li>
                  </ul>
                </li>
                <li class="mobile_item"><a href="events-3col.html">Events</a>
                  <ul class="sub-menu">
                    <li><a href="events-2col.html">2 Columns</a></li>
                    <li><a href="events-3col.html">3 Columns</a></li>
                    <li><a href="single-event.html">Single Event</a></li>
                  </ul>
                </li> --}}
                <!-- <li class="mobile_item"><a href="{{url('/blog')}}">Blog</a></li>
                <li class="mobile_item"><a href="contact.html">Contact</a></li> -->
                <!-- Right Side Of Navbar -->
                <li>
                    <!-- Authentication Links -->
                  @if (Auth::guest())
                    <li class="mobile_item"><a href="{{ url('/logop') }}">Login &nbsp;</a></li>
                    <li class="mobile_item"><a href="{{ route('register') }}">Register</a></li>
                  @else
                    <li class="dropdown mobile-item">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('/exercises')}}">Dashboard</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                      </ul>
                    </li>
                  @endif
                </li>
            </ul>
          </nav>
        </div><!--.clearfix-->
      </div><!--.col-md-12-->
    </div><!--.row-->
  </div><!--.container-->
  <script src="{{asset('js/nav.js')}}"></script>
</header><!-- header-bar-->
 
