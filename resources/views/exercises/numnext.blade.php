<html>
<head>
<meta content='width=device-width, initial-scale=1' name='viewport'/>
</head>
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;padding-top:50px;">
<center><p style="font-size:30px">Well played!</p></center>
<center><p style="font-size:30px">Would you like to go back or play again?</p></center>
<div style="padding-left:60px" >
<button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;" id="st" >Go back</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick="location.href = '{{url('/numbers')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;padding:0px" id="st" >Play again</button>
</div>
</body>
</html>