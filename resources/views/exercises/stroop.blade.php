<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stroop Test</title>
        
        {{-- Fonts & Font-awesome icons --}}

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900%7CPacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'> 
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

        <!-- Favicons -->

        <!-- <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"> -->
        <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" type="text/css" media="all" />

        {{-- Jquery & Bootstrap CDN --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        {{-- JS & CSS for this exercise --}}

        <script src="{{asset('pause.js')}}"></script>
        <link type="text/css" href="{{asset('css/stroop.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('pause.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('css/common.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('progress/trial.css')}}">
    
    </head>
    <style>
    div.container4 {
    margin: 0;
    position: absolute;
    margin-top:100px;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
    </style>
    <body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
        <div id="main" class="wrap">
            <!-- <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav();countdown();">&times;</a>
                <a onclick="closeNav();countdown();" class="hrefs"  style="color:#818181;"><i class="fas fa-play"></i> Resume</a>
                <a href="{{url('/stroop')}}"  class="hrefs"><i class="fas fa-undo"></i> Restart</a>
                <a href="{{url('/exercises')}}" class="hrefs"><i class="fas fa-power-off"></i> Quit</a>
                <a href="#" style="border: 1px solid #818181;width:initial;margin:5%;margin-left:20%;margin-right:20%;"><i class="far fa-question-circle"></i> View Tutorial</a>        
            </div> -->
            <section id="slider-home" class="wrap" style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;padding:0px 0px 87px 0px;">
                <div class="container">	
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row" style="padding:0px 0px 0px 0px;">
                                <div class="col-4">
                                    <!-- <span style="font-size:30px;cursor:pointer;" onclick="openNav();pause_timer();">&#9776;</span> -->
                                </div>
                                <div class="col-4" style="margin-top:10px;padding-bottom:0px;">
                                    <form id="form" action='{{url('/stroop_result')}}' method="POST">
                                        @csrf
                                        <div style="font-family: 'Cabin Sketch';font-size: 20px;">
                                            <input type="hidden" id="db_score" name="db_score"><p style="overflow:auto;font-size:inherit;"id="score">Score:</p>
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
                            {{-- Template-Part --}}
                            <h1>Stroop test</h1>
                            <div class="container4">
                            <div id="start" style="margin-bottom:100px;width:100%;padding-top:30px">
                                <button onclick="start()" style="height:50px;width:100px;background-color: #ffffff;font-size:15px;" id="st" >Start exercise</button>
                                <br>
                                <br>
                                <button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:100px;background-color: #ffffff;font-size:15px;" id="st" >Go back</button>
                            </div>
                            </div>
    
                            <div id="man" style="width:100%">
                                <audio id="music" src="{{asset('song.mp3')}}" type="audio/mpeg"></audio><br><br>          
                                {{-- <div class="row" style="padding-bottom:20px;">
                                    <div class="col-12">
                                        <div class="progress-bar" style="float:none;align-items:center;">
                                            <div class="progress-bar-value" id="progress-bar-value">%</div>
                                            <img src="{{asset('progress/cb.png')}}" id="cb" style="position:absolute;display: flex;height:100%;left:0px;">
                                            <div class="progress-bar-fill"></div> 
                                            <div class="imgs" style="position:fixed;display:flex;left:74%;margin-top:0px;">
                                                <img class="img-fluid"src="{{asset('progress/ladoo.png')}}" style="max-width:100%;height:58px;">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-12 text-center" style="padding:0px;margin-bottom:40px;font-size:20px;font-family:Cabin Sketch,Cursive;">
                                        {{-- <progress value="0" max="120" id="progressBar"></progress>  --}}
                                        <!-- <div id="circleProgress5" class="progressbar-js-circle border rounded p-3" > -->
                                        {{-- <svg viewBox="0 0 100 100" style="display: block;height:65% ;width: 65%;">
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#eee" stroke-width="4" fill-opacity="0"></path>
                                        <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#3500D3" stroke-width="4" fill-opacity="0" ></path>
                                        </svg> --}}
                                        Time : <span class="js-timeout">0:10</span>
                                    </div>
                                </div>
                                <p class="hints">Meaning</p>
                                <div id="triangle-down"></div>    
                                <div class="card" style="font-family: 'cursive';font-size: 20px;">
                                    <div id="q"></div>
                                </div>
                                <div class="card-color">
                                    <div type="color" id="color" style="width:100px;height:50px;background-color:#000; border-radius:80px;position:inherit;">        </div>
                                </div>
                                <div id="triangle-up"></div>
                                <p class="hints">Color</p>
                                <button value="yes" style="margin:20px;font-family: 'Cabin Sketch';font-size: 20px;" class="btn btn-dark" id="y" onclick="yes()" value="yes">Yes</button>
                                <button value="no" style="margin:10px;font-family: 'Cabin Sketch';font-size: 20px;" class="btn btn-dark"  id="n" onclick="no()"value="no">No</button>
                                <br><br>
                                    
                                <!-- <button onclick="getValue()">Value</button> -->
                                <!-- <p id="disp"></p> -->
                                <!--   <p id="score"></p> -->
                                <!-- <p id="score-x"></p>
                                <p id="score-y"></p> -->
                            </div>
                            {{-- Template Part --}}
                        </div><!-- col-md-12-->
                    </div><!--end row-->
                </div><!--end container-->
            </section><!-- home-testimonials-->
            {{-- <div class="zz-top-foo"></div>
            @include('inc.footer') --}}
        </div>
        <script src="{{asset('js/stroop.js')}}"></script>        
    </body>
</html>
{{-- Template Part --}}
 