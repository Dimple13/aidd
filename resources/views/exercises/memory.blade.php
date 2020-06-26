<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Flip cards</title>
	
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

	{{-- Jquery & Bootstrap CDN --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	{{-- JS & CSS for this exercise --}}

	<script src="{{asset('pause.js')}}"></script>
	<link type="text/css" href="{{asset('pause.css')}}" rel="stylesheet">
</head>		
<head>
<script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link type="text/css" href="{{asset('pause.css')}}" rel="stylesheet"> 
<style>
	/* Mobile-view CSS */
	div#memory_board{
		background: none;
		width:100%;
		height:100%;
		padding:2px;
		margin:0px auto;
		margin-top: 20px;
	}
	div#memory_board > div{
		background: url(tile_bg.jpg) no-repeat;
		border:#000 1px solid;
		width:60px;
		height:70px;
		float:left;
		margin:10px;
		padding:0px;
		font-size:50px;
		cursor:pointer;
		text-align:center;
		font-family: Cabin Sketch, serif;
	}
	@media(max-width:350px)
	{
	div#memory_board > div{
		width:50px;
		height:60px;
		font-size: 40px;
		}
	}
	/* Mobile-view CSS */
	
	/* Tablet-view */
	@media(min-width:760px) and (max-width:900px)
	{
	div#memory_board > div{
		background: url(tile_bg.jpg) no-repeat;
		border:#000 1px solid;
		width:35px;
		height:70px;
		font-size:40px;
	}
	}
	/* Tablet-view */
	
	/* Desktop-view CSS */
	@media(min-width:900px)
	{
		div#memory_board{
		left:300px;
	}
	div#memory_board > div{
		width:56px;
		height:70px;
		font-family: Cabin Sketch, serif; */
	}
	
	}
	
	@media(min-width:1100px)
	{
		div#memory_board{
		left:300px;
	}
	div#memory_board > div{
		width:70px;
		height:90px;
		font-size: 60px;
		}
	}
	/* Desktop-view CSS */		
</style>

<script>
	
	var memory_array = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J','K','K','L','L'];
	var memory_values = [];
	var memory_tile_ids = [];
	var tiles_flipped = 0;
	Array.prototype.memory_tile_shuffle = function(){
		var i = this.length, j, temp;
		while(--i > 0){
			j = Math.floor(Math.random() * (i+1));
			temp = this[j];
			this[j] = this[i];
			this[i] = temp;
		}
	}
	function newBoard(){
		count=0;
		tiles_flipped = 0;
		var output = '';
		memory_array.memory_tile_shuffle();
		for(var i = 0; i < memory_array.length; i++){
			output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
		}
		document.getElementById('memory_board').innerHTML = output;
		

	}
	function memoryFlipTile(tile,val){

		// count=0;

		if(tile.innerHTML == "" && memory_values.length < 2){
			// count++;
			tile.style.background = '#FFF';
			tile.innerHTML = val;
			count++;
			if(memory_values.length == 0){
				
				memory_values.push(val);
				memory_tile_ids.push(tile.id);
				// count+=2;
			} else if(memory_values.length == 1){
				// count++;
				memory_values.push(val);
				memory_tile_ids.push(tile.id);
				
				if(memory_values[0] == memory_values[1]){
					tiles_flipped += 2;
					//  count+=2;
					
					memory_values = [];
					memory_tile_ids = [];
					
					if(tiles_flipped == memory_array.length){
						// count++;
						document.getElementById('form').submit();
						
    				// swal({
					// 	title:"Congrats!"
					// 	text:"You cleared the board"
					// 	icon:"success"
					// 	timer:10000
				
					// }
						document.getElementById('memory_board').innerHTML = "";
						newBoard();
					}
				} else {
					function flip2Back(){
						// count+=2;
						// count++;
						var tile_1 = document.getElementById(memory_tile_ids[0]);
						var tile_2 = document.getElementById(memory_tile_ids[1]);
						tile_1.style.background = 'url(tile_bg.jpg) no-repeat';
						tile_1.innerHTML = "";
						tile_2.style.background = 'url(tile_bg.jpg) no-repeat';
						tile_2.innerHTML = "";
						
						memory_values = [];
						memory_tile_ids = [];
					}
					setTimeout(flip2Back, 700);
				}
			}
		}
		document.getElementById('db_score').value =count;
		document.getElementById('score').innerHTML =count;
	}
</script>
</head>	
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
	<div id="main" class="wrap">
		<!-- <div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a onclick="closeNav()" class="hrefs"  style="color:#818181;"><i class="fas fa-play"></i> Resume</a>
		<a href="{{url('/memory')}}"  class="hrefs"><i class="fas fa-undo"></i> Restart</a>
		<a href="{{url('/exercises')}}" class="hrefs"><i class="fas fa-power-off"></i> Quit</a>
		<a href="#" style="border: 1px solid #818181;width:initial;margin:5%;margin-left:20%;margin-right:20%;"><i class="far fa-question-circle"></i> View Tutorial</a>        
		</div> -->
		<section id="slider-home" class="wrap" style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;padding:0px 0px 87px 0px;">
			<div class="container">	
				<div class="row">
					<div class="col-md-12">
						<div class="row" style="padding:0px 0px 0px 0px;">
							<div class="col-4">
								<!-- <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span> -->
							</div>
							<div class="col-4" style="margin-top:10px;padding-bottom:0px;">
								<form id="form" action='{{url('/memnext')}}' method="GET">
									@csrf
									<div style="font-family: 'Cabin Sketch';font-size: 20px;">
										<input type="hidden" id="db_score" name="db_score">
										Flips: <span style="overflow:auto;font-size:inherit;"id="score"></span>
									</div>
									{{-- <input type="submit" value="submit" class="btn btn-success">  --}}
								</form>
							</div>
							<div class="col-4" style="margin-top:10px;padding-bottom:0px;">
								<button value="pause" onclick="music_pause()" id="vol" class="float-right">
									<i onclick="music_pause()" class="fas fa-volume-up" style="width:20px;height:20px;"></i>
								</button>
								<audio id="music" src="{{asset('song.mp3')}}" type="audio/mpeg"></audio><br><br>                    
							</div>
						</div>
						{{-- Template-Part --}}
						<div id="memory_board" class="col-md-4">
						</div>
						<script>newBoard();</script>
				   		{{-- Template Part --}}
					</div><!-- col-md-12-->				
				</div><!--end row-->
			</div><!--end container-->
		</section><!-- home-testimonials-->
	</div>
	<script>
		function music_pause(){
	$(document).on("click",".fa-volume-up", function (e) {
		document.getElementById("music").pause(); 
		$(".fa-volume-up").addClass("fa-volume-off");
		$(".fa-volume-up").removeClass("fa-volume-up");
		e.stopPropagation();
	});
	
	document.getElementById("music").play();
	$(document).on("click", ".fa-volume-off", function (e1) {
		$(".fa-volume-off").addClass("fa-volume-up");
		$(".fa-volume-off").removeClass("fa-volume-off");
	});
	}
	</script>
</body>
</html>