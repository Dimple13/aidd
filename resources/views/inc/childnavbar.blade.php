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
          <div id="logo">
            <a href="#"><img class="img-responsive" src="{{asset('images/logo.png')}}" alt=""/></a>
          </div>
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
              <li><a href="{{url('/exercises')}}">Exercises</a></li>
              <!-- <li><a href="{{url('/progress1')}}">Progress</a></li> -->
              <!-- <li><a href="{{url('/blog')}}">Blog</a></li> -->
              <!-- <li><a href="contact.html">Contact</a></li> -->
                
              
              <li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                  <li><a href="{{ route('login') }}">Login &nbsp;</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                @else
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} 
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <!-- <li><a href="{{url('/exercises')}}">Dashboard</a></li> -->
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
            </div>
          </nav>
          <nav class="mobile">
          <ul class="mobile-items">
            <li class="mobile_item"><a class="ic" href="{{url('/exercises')}}">Exercises</a></li>
            <!-- <li class="mobile_item"><a class="ic" href="{{url('/progress1')}}">Progress</a></li>
            <li class="mobile_item"><a class="ic" href="{{url('/reports')}}">Reports</a></li> -->
            <!-- <li class="mobile_item"><a class="ic" href="{{url('/videos')}}">Videos</a></li> -->
            <!-- <li class="mobile_item"><a class="ic" href="{{url('/blog')}}">Blog</a></li>
            <li class="mobile_item"><a class="ic" href="{{url('/contact')}}">Contact</a></li> -->
            <li>
              <!-- Authentication Links -->
              @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login &nbsp;</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
              @else
                <li class="mobile_item">
                  <a href="#">
                      {{ Auth::user()->name }} <button class="fas fa-chevron-circle-down" onclick="user_icon();"></button>
                  </a>
                </li>
                  <div class="user-menu">
                    <!-- <li class="mobile_item"><a href="{{url('/exercises')}}">Dashboard</a></li> -->
                    <li class="mobile_item">
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </div>
              @endif
            </li>
          </ul>
          </nav>
            {{-- <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-navigation"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" style="max-height: 100%;" id="collapse-navigation">
              <ul class="nav menu-nav">
                <li class="current_page_item"><a href="{{url('/exercises')}}">Exercises</a></li>
                <!-- <li><a href="{{url('/progress')}}">Progress</a>
                  <ul class="sub-menu">
                  <li><a href="{{url('/faq')}}"></a></li>
                  <li><a href="{{url('/testimonials')}}"></a></li>
                  <li><a href="{{url('pricing-table')}}">Pricing Table</a></li>
                  <li><a href="{{url('404-page')}}">404 Page</a></li>
                  </ul>
                </li>
                <li><a href="{{url('/reports')}}">Reports</a>
                  <ul class="sub-menu">
                  <li><a href="{{url('single-teacher')}}">Single Teacher</a></li>
                  </ul>
                </li>
                <li><a href="{{url('/videos')}}">Videos</a>
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
                <li><a href="{{url('/contact')}}">Contact</a></li> -->
                
                <!-- Right Side Of Navbar -->
                <li>
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login &nbsp;</a></li>
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
            </div><!-- /.navbar-collapse -->           --}}
          {{-- </nav> --}}
        </div><!--.clearfix-->
      </div><!--.col-md-12-->
    </div><!--.row-->
  </div><!--.container-->
  <script src="{{asset('js/nav.js')}}"></script>
</header><!-- header-bar-->
   
  