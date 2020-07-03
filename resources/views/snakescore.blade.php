<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/circle.css')}}">
  <title>Progress</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
body {
	
}
h1 {
	font-family: 'Open Sans';
	color: black;
	text-align: center;
	margin: 50px 0 -80px;
}
a {
	font-family: 'Open Sans';
	color: black;
	margin: 50px 0 -80px;
	text-align: center;
	width: 100%;
	font-size: 12px;
	text-decoration: none;
}
#wrapper{
	position: relative;
	top: 80px;
	width: 404px;
}
.center {
	left: 50%;
	-webkit-transform: translate( -50% );
	-ms-transform: translate( -50% );
	transform: translate( -50% );
}

/*===== The CSS =====*/
.progress{
	width: 200px;
	height: 280px;
}
.progress .track, .progress .fill{
	fill: rgba(0, 0, 0, 0);
	stroke-width: 3;
	transform: rotate(90deg)translate(0px, -80px);
}
.progress .track{
	stroke: rgb(56, 71, 83);
}
.progress .fill {
	stroke: black;
	stroke-dasharray: 219.99078369140625;
	stroke-dashoffset: -219.99078369140625;
	transition: stroke-dashoffset 1s;
}
.progress.blue .fill {
	stroke: rgb(104, 214, 198);
}
.progress.green .fill {
	stroke: rgb(186, 223, 172);
}
.progress .value, .progress .text {
	font-family: 'Open Sans';
	fill: rgb(255, 255, 255);
	text-anchor: middle;
}
.progress .text {
	font-size: 12px;
}
.noselect {
    background:black;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
		cursor: default;
}
 /* #swara{
  visibility:hidden ;
  font-size:2px
} */
</style>
<script>
/* Set Progress | jQuery
======================================*/
/*
$(document).ready(function(){
	var max = 150.72259521484375;
	$.each($('.progress'), function( index, value ){
		percent = $(value).data('progress');
		$(value).children($('.fill')).attr('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
		$(value).children($('.value')).text(percent + '%');
	});
});
*/


var forEach = function (array, callback, scope) {
	for (var i = 0; i < array.length; i++) {
		callback.call(scope, i, array[i]);
	}
};
window.onload = function(){
	var max = -219.99078369140625;
	forEach(document.querySelectorAll('.progress'), function (index, value) {
	percent = value.getAttribute('data-progress');
		value.querySelector('.fill').setAttribute('style', 'stroke-dashoffset: ' + ((100 - percent) / 100) * max);
		value.querySelector('.value').innerHTML = percent + '%';
	});
}



/*

Used to calc the variable 'max' 
and set 'stroke-dasharray' and 
'stroke-dashoffset' in the css
	 
	
  	console.log(document.querySelector('.fill').getTotalLength());
		
*/
</script>
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
<h1 style="font-family:Times New Roman, Times, serif;">Speed statistics of snake game</h1>
<br>
<center><div id="wrapper" class="center">
	<svg class="progress blue noselect" data-progress={{$pred}} x="0px" y="0px" viewBox="0 0 80 80">
		<path class="track" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
		<path class="fill" d="M5,40a35,35 0 1,0 70,0a35,35 0 1,0 -70,0" />
		<text class="value" style="color:black" x="50%" y="55%">0%</text>
		
	</svg>
</div></center>	

</body>
</html>