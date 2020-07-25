<html>
<head>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
</head>
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;padding-top:50px;">
<center><p style="font-size:30px">Progress of all games</p></center>
<br>
<div  >
<center><button onclick="location.href = '{{url('/graph')}}'" style="height:70px;width:100px;background-color: #ffffff;font-size:15px;" id="st" >Colour match game progress</button></center>
<br>
<br>
<center><button onclick="location.href = '{{url('/snakescore')}}'" style="height:70px;width:100px;background-color: #ffffff;font-size:15px;" id="st" > Speed stats of colour match game</button></center>
<br>

<!-- <center><button onclick="location.href = '{{url('/exercises')}}'" style="height:70px;width:100px;background-color: #ffffff;font-size:15px;" id="st" >Go back</button></center> -->


</button>
</div>
</body>
</html>
