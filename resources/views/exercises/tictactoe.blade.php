<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TicTacToe</title>
        
        {{-- Fonts & Font-awesome icons --}}

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900%7CPacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'> 
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 


        <!-- Favicons -->

        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}" type="text/css" >

        {{-- Jquery & Bootstrap CDN --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        


        {{-- JS & CSS for this exercise --}}

        <link href="{{asset('css/tic.css')}}" rel="stylesheet">
        <script src="{{asset('pause.js')}}"></script>
        <link type="text/css" href="{{asset('css/stroop.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('css/common.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('pause.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('progress/trial.css')}}">
    
    </head>
    <body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
        <div id="main" class="wrap">
            <!-- <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a onclick="closeNav()" class="hrefs"  style="color:#818181;"><i class="fas fa-play"></i> Resume</a>
                <a href="{{url('/stroop')}}"  class="hrefs"><i class="fas fa-undo"></i> Restart</a>
                <a href="{{url('/exercises')}}" class="hrefs"><i class="fas fa-power-off"></i> Quit</a>
                <a href="#" style="border: 1px solid #818181;width:initial;margin:5%;margin-left:20%;margin-right:20%;"><i class="far fa-question-circle"></i> View Tutorial</a>        
            </div>-->
            <section id="slider-home" class="wrap" style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;padding:0px 0px 87px 0px;"> 
                <div class="container">	
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="padding:0px 0px 0px 0px;">
                                <div class="col-4">
                                    <!-- <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span> -->
                                </div>
                                <div class="col-4" style="margin-top:10px;padding-bottom:0px;">
                                    <!-- <form id="form" action='{{url('/stroop_result')}}' method="GET"> -->
                                        @csrf
                                        <div style="font-family: 'Cabin Sketch';font-size: 20px;">
                                        <h1>Tictactoe Game</h1>
                                        
                                        </div>
                                        {{-- <input type="submit" value="submit" class="btn btn-success">  --}}
                                    </form>
                                </div>
                                <div class="col-4" style="margin-top:10px;padding-bottom:0px;">
                                    <button value="pause" onclick="music_pause()" id="vol" class="float-right">
                                        <i onclick="music_pause()" class="fas fa-volume-up" style="width:20px;height:20px;"></i>
                                    </button>                    
                                </div>
                            </div>
              <div class="text-center d-flex justify-content-center">
                <div id="root">
                </div>
                <script src="{{ asset('js/tictactoe.js') }}" defer></script>
                <script src="{{ asset('js/jquery-3.4.1.min.js') }}" defer></script>
                <script src="{{ asset('js/sweetalert.min.js') }}" defer></script>


              </div>
              
            {{-- Template Part --}}
          </div><!-- col-md-12-->
        </div><!--end row-->
        <br>
        <br>
        <center><button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;" id="st" >Go back</button><center>
    </div><!--end container-->
</section><!-- home-testimonials-->
{{-- <div class="zz-top-foo"></div>
@include('inc.footer') --}}
</div>
</body>
</html>