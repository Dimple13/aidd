<head>
    <title>AiDD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900%7CPacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'> 
    <script src="{{asset('pause.js')}}"></script>
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
                    <div id="logo"><a href="#"><img class="img-responsive" src="{{asset('images/logo.png')}}" alt=""/></a></div>
                    <nav class="navbar navbar-custom" role="navigation">
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        {{-- <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <a href="#">About</a>
                            <a href="#">Services</a>
                            <a href="#">Clients</a>
                            <a href="#">Contact</a>
                          </div>                                                     --}}
                    </nav>
                </div><!--.clearfix-->
            </div><!--.col-md-12-->
        </div><!--.row-->
    </div><!--.container-->
</header><!-- header-bar-->
