@extends('layouts.exe')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Missing letter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700&amp;subset=latin-ext">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/btn.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/stroop1.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="public/css/trial.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
<p ><center><b style="font-size:25px">Missing letters game</b></center></p>
<div id="main" class="wrap">
    <!-- <div id="mySidenav" class="sidenav"> -->
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a onclick="closeNav()" class="hrefs"  style="color:#818181;"><i class="fas fa-play"></i> Resume</a>
        <a href="{{url('/stroop')}}"  class="hrefs"><i class="fas fa-undo"></i> Restart</a>
        <a href="{{url('/exercises')}}" class="hrefs"><i class="fas fa-power-off"></i> Quit</a>
        <a href="#" style="border: 1px solid #818181;width:initial;margin:5%;margin-left:20%;margin-right:20%;"><i class="far fa-question-circle"></i> View Tutorial</a>     -->    
    </div>
    <section id="slider-home" class="wrap" style="background-color:transparent;padding-top:0">
        <div class="container">	
            <div class="row">
                <div class="col-md-12 main">
        <!-- {{-- Template-Part --}} -->
        			<center><div id="start" style="margin-bottom:100px;width:100%;margin:0px">
                        <button onclick="start()" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;" id="st" >Start exercise</button>
                        <br>
                        <br>
                        <br>
                        <button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;" id="st" >Go back</button>
                    </div>
                    </center>
                    
                    <div id="man" style="width:100%; height:100%">
                        <center><h1 style="font-family:sans-serif">Missing Letters</h1>
                            
                            Time : <div id="waiting_time"></div></center>
                            <div class="text-center" style="font-family: 'Cabin Sketch';font-size: 20px;">

                                Your score:<p id="score"></p>
                            </div>
                            <!-- <progress value="0" max="10" id="progressBar"></progress> 
                             <div id="circleProgress5" class="progressbar-js-circle border rounded p-3" > 
                                <svg viewBox="0 0 100 100" style="display: block; width: 15%;margin-left: 2px;margin-top: -20px;">
                                <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#eee" stroke-width="4" fill-opacity="0"></path>
                                <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#3500D3" stroke-width="4" fill-opacity="0" ></path>
                                </svg>
                                <div class="progressbar-text text" id="prg" style="position: absolute; margin-left: 75px;margin-top: -75px; padding: 0px; transform: translate(-50%, -50%); color:white ; font-size: 1rem;"></div>
                             </div> <br><br> -->
                            <!-- <div class="progress-bar" style="justify-content: center;">
                                <div class="progress-bar-value"></div>
                                <img src="./cb.png" id="cb" style="position:absolute;display: flex;height:100%;left:0px;">
                                <div class="progress-bar-fill" style="display:contents;"></div>
                                <img src="./ladoo.png" style="position:absolute;display:flex;height:100%;left: 300px;margin-top:0px;">
                            </div><br><br> -->
                            <!-- <progress value="0" max="10" id="progressBar"></progress>  -->
        <!-- <div id="circleProgress5" class="progressbar-js-circle border rounded p-3" > -->
            <!-- <svg viewBox="0 0 100 100" style="display: block; width: 15%;margin-left: 2px;margin-top: -20px;">
            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#eee" stroke-width="4" fill-opacity="0"></path>
            <path d="M 50,50 m 0,-48 a 48,48 0 1 1 0,96 a 48,48 0 1 1 0,-96" stroke="#3500D3" stroke-width="4" fill-opacity="0" ></path>
            </svg>
            <div class="progressbar-text text" id="prg" style="position: absolute; margin-left: 75px;margin-top: -75px; padding: 0px; transform: translate(-50%, -50%); color:white ; font-size: 1rem;"></div>
        </div><br><br> -->
        <!-- <div class="progress-bar" style="justify-content: center;">
            <div class="progress-bar-value">0%</div>
            <img src="./cb.png" id="cb" style="position:absolute;display: flex;height:100%;left:0px;">
            <div class="progress-bar-fill"></div>
            <img src="./ladoo.png" style="position:absolute;display:flex;height:100%;left: 300px;margin-top:0px;">
        </div><br><br>
                             -->
                            <!-- <form method="get" > -->
							<bold><div id="txt" ></div></bold>	
							<!-- <p>Write ur ans</p>
							<div id="12">
							<input type="text" id="let"><br>
							</div>
							<input type="submit">
							<button >Submit</button> -->
							<!-- </form> -->

                            <br><br>
 							<h id="ans"></h>  

 							<div id="let">
							<button class="button button-2 button-2i" onclick="result(this.value)" id="b[0]"></button>
                            <button class="button button-2 button-2j" onclick="result(this.value)" id="b[1]"></button>
                            <br>
							<button class="button button-2 button-2i" onclick="result(this.value)" id="b[2]"></button>
							<button class="button button-2 button-2j" onclick="result(this.value)" id="b[3]"></button>
  						</div>
                        



	
 <!--  {{-- Template Part --}} -->
                </div><!-- col-md-12-->

            </div><!--end row-->
 </div> 
        </div><!--end container-->

    </section><!-- home-testimonials-->

<!-- {{-- 
@include('inc.footer') --}}  -->   
</div>
  <script src="{{asset('js/missing.js')}}"></script>   
</body>    
</html>