{{-- Template-Part --}}
@extends('layouts.exe')
@section('content')
<head>
    <meta charset="UTF-8" />
    <title>Lost in maze</title>
    <link rel="stylesheet" type="text/css" href="{{asset('maze.css')}}">
    <link type="text/css" href="{{asset('pause.css')}}" rel="stylesheet">
</head>
<style>button {
	border-radius :5px;
	border : 5px solid black;
	background-color : black;
	position:absolute ;
    color:white;
    margin: 0;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    }
    div.container4 {
    margin: 0;
    position: absolute;
    margin-top:100px;
    left: 47%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
    </style>
<!-- <div id="main" class="wrap">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a onclick="closeNav()" class="hrefs"  style="color:#818181;"><i class="fas fa-play"></i> Resume</a>
        <a href="{{url('/maze')}}"  class="hrefs"><i class="fas fa-undo"></i> Restart</a>
        <a href="{{url('/exercises')}}" class="hrefs"><i class="fas fa-power-off"></i> Quit</a>
        <a href="#" style="border: 1px solid #818181;width:initial;margin:5%;margin-left:20%;margin-right:20%;"><i class="far fa-question-circle"></i> View Tutorial</a>        
    </div> -->
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
<section id="slider-home" class="wrap" style="background-color:transparent;padding:20px 0px 20px 0px">

	<div class="container">	
    <div class="row">
    <div class="col-md-12">
{{-- Template-Part --}}
        
        <section>
            <div id="wrapper" style="margin-left:auto; margin-right:auto;">
                <h1 id="heading" style=" text-decoration-style: solid; margin-top: 0px; margin-bottom: 10px">Lost in maze</h1>
                <div id="maze">
                    <p style="text-align: center;margin-bottom: 10px">Find the way out of Maze in 30 seconds!</p>
                    <div id="c" style="margin-left:auto; margin-right:auto;margin-bottom: 10px;text-align: center;width: 40%;font-size: large"></div>
        
                    <canvas id="canvas" width="523" height="523" style="width:90%;margin-left:auto; margin-right:auto">
                    This text is displayed if your browser does not support HTML5 Canvas.
                </canvas><br>
                    <div id="timerel" style="margin-left:auto; margin-right:auto;margin-top:0px;text-align: center;width: 40%;font-size: large"></div>
        
                </div>
        
                
                <div id="myModal" class="modal">
        
                     
                    <div class="modal-content" style="display:table;">
                        <div class="modal-header">
                            <span class="close">&times;</span>
                            <h2 class="gamehead"></h2>
                        </div>
                        <div class="modal-footer">
                            <h2 id="demo" onmouseover="" style="cursor:pointer;">Play Again?</h2>
                        </div>
                    </div>
        
                </div>
        
        
            </div>
            
            <script type="text/javascript">
                 
                var modal = document.getElementById('myModal');
        
               
                var span = document.getElementsByClassName("close")[0];
        
                
                modelfungo = function() {
                    console.log("func called")
                    modal.style.display = "block";
                    x = document.querySelector(".gamehead");
                    x.textContent = "Game Over"
        
                }
        
                modelfunwin = function() {
                    console.log("func called")
                    modal.style.display = "block";
                    x = document.querySelector(".gamehead");
                    x.textContent.font= "10px Arial";
                    x.textContent = "Congrats! You Win"
        
                }
        
                document.getElementById("demo").addEventListener("click", myFunction);
        
                function myFunction() {
                    document.location.reload();
                }
        
                 
                span.onclick = function() {
                    modal.style.display = "none";
                }
        
                 
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
        
        
                
                function startTimer(duration, display) {
                    var start = Date.now(),
                        diff,
                        minutes,
                        seconds;
        
                    function timer() {
                        if(playing) {
                            diff = duration - (((Date.now() - start) / 1000) | 0);
                            minutes = (diff / 60) | 0;
                            seconds = (diff % 60) | 0;
                            minutes = minutes < 10 ? "0" + minutes : minutes;
                            seconds = seconds < 10 ? "0" + seconds : seconds;
                            display.textContent = "Game ends in " + minutes + ":" + seconds;
        
                            if (diff <= 0) {
                                display.textContent = "Game Over";
                                start = Date.now() + 1000;
                                playing = false
                                modelfungo();
                            }
                        }
                    };
                    timer();
                    setInterval(timer,1000)
                }
        
                window.onload = function () {
                    twominutes = 30;
                    x = document.querySelector("#timerel");
                    startTimer(twominutes,x)
                }
                playing = true
                window.addEventListener('keydown',doKeyDown,true);
        
                function doKeyDown(evt)
                {
                    var handled = false;
                    if (playing) {
                        switch (evt.keyCode) {
                            case 38:   
                                m.moveup("canvas");
                                handled = true
                                break;
                            case 87:   
                            
                                m.moveup("canvas");
                                handled = true
                                break;
                            case 40 :  
                                m.movedown("canvas");
                                handled = true
                                break;
                            case 83 :   
                                m.movedown("canvas");
                                handled = true
                                break;
                            case 37:   
                                m.moveleft("canvas");
                                handled = true
                                break;
                            case 65:  
                                m.moveleft("canvas");
                                handled = true
                                break;
                            case 39:   
                                m.moveright("canvas");
                                handled = true
                                break;
                            case 68:   
                                m.moveright("canvas");
                                handled = true
                                break;
                        }
                        if (m.checker("canvas"))
                            playing = false
                        console.log(m.getMoves())
        
                    }
                    if (handled)
                        evt.preventDefault();  
                }
                
                function down(){
                    m.movedown("canvas");
                    handled = true
                    if (m.checker("canvas"))
                            playing = false
                        console.log(m.getMoves())
                }
                function up(){
                    m.moveup("canvas");
                    handled = true
                }
                function right(){
                    m.moveright("canvas");
                    handled = true
                }
                function left(){
                    m.moveleft("canvas");
                    handled = true
                    }
        
        
                var dsd = function (size) {
                    this.N = size;
                    this.P = new Array(this.N);
                    this.R = new Array(this.N);
        
                    this.init = function () {
                        for (var i = 0; i < this.N; i++) {
                            this.P[i] = i;
                            this.R[i] = 0;
                        }
                    }
        
                    this.union = function (x, y) {
                        var u = this.find(x);
                        var v = this.find(y);
                        if (this.R[u] > this.R[v]) {
                            this.R[u] = this.R[v] + 1;
                            this.P[u] = v;
                        }
                        else {
                            this.R[v] = this.R[u] + 1;
                            this.P[v] = u;
                        }
                       
                    }
        
                    this.find = function (x) {
                        if (x == this.P[x])
                            return x;
                        this.P[x] = this.find(this.P[x]);
                        return this.P[x];
                    }
                    
                };
        
                function random(min, max)      { return (min + (Math.random() * (max - min)));            };
                function randomChoice(choices) { return choices[Math.round(random(0, choices.length-1))]; };
        
                var maze = function (X, Y) {
                    this.N = X;
                    this.M = Y;
                    this.S = 25;
                    this.moves = 0;
                    this.Board = new Array(2 * this.N + 1);
                    this.EL = new Array();
                    this.vis = new Array(2 * this.N + 1);
                    this.delay = 2;
                    this.x = 1;
                    this.init = function () {
                        for (var i = 0; i < 2 * this.N + 1; i++) {
                            this.Board[i] = new Array(2 * this.M + 1);
                            this.vis[i] = new Array(2 * this.M + 1);
                        }
        
                        for (var i = 0; i < 2 * this.N + 1; i++) {
                            for (var j = 0; j < 2 * this.M + 1; j++) {
                                if (!(i % 2) && !(j % 2)) {
                                    this.Board[i][j] = '+';
                                }
                                else if (!(i % 2)) {
                                    this.Board[i][j] = '-';
                                }
                                else if (!(j % 2)) {
                                    this.Board[i][j] = '|';
                                }
                                else {
                                    this.Board[i][j] = ' ';
                                }
                                this.vis[i][j] = 0;
                            }
                            
                        }
                        
                    }
        
        
                    this.add_edges = function () {
                        for (var i = 0; i < this.N; i++) {
                            for (var j = 0; j < this.M; j++) {
                                if (i != this.N - 1) {
                                    this.EL.push([[i, j], [i + 1, j], 1]);
                                }
                                if (j != this.M - 1) {
                                    this.EL.push([[i, j], [i, j + 1], 1]);
                                }
                            }
                        }
                    }
        
        
                    //Hash function
                    this.h = function (e) {
                        return e[1] * this.M + e[0];
                    }
                    this.randomize = function (EL) {
                        for (var i = 0; i < EL.length; i++) {
                            var si = Math.floor(Math.random() * 387) % EL.length;
                            var tmp = EL[si];
                            EL[si] = EL[i];
                            EL[i] = tmp;
                        }
                        return EL;
                    }
      
                    this.breakwall = function (e) {
                        var x = e[0][0] + e[1][0] + 1;
                        var y = e[0][1] + e[1][1] + 1;
                        this.Board[x][y] = ' ';
                       
                    }
                    this.gen_maze = function () {
                        this.EL = this.randomize(this.EL);
                        var D = new dsd(this.M * this.M);
                        D.init();
                        var s = this.h([0, 0]);
                        var e = this.h([this.N - 1, this.M - 1]);
                        this.Board[1][0] = ' ';
                        this.Board[2 * this.N - 1][2 * this.M] = ' ';
                        //Run Kruskal
                        for (var i = 0; i < this.EL.length; i++) {
                            var x = this.h(this.EL[i][0]);
                            var y = this.h(this.EL[i][1]);
                            if (D.find(s) == D.find(e)) {
                                if (!(D.find(x) == D.find(s) && D.find(y) == D.find(s))) {
                                    if (D.find(x) != D.find(y)) {
                                        D.union(x, y);
                                        this.breakwall(this.EL[i]);
                                        this.EL[i][2] = 0;
                                    }
                            
                                }
                                 
                            }
        
                            else if (D.find(x) != D.find(y)) {
                                D.union(x, y);
                                this.breakwall(this.EL[i]);
                                this.EL[i][2] = 0;
                            }
                            else {
                                continue;
                            }
                            
                          
                        }
                        
        
                    };
        
        
                    this.draw_canvas = function (id) {
                        this.canvas = document.getElementById(id);
                        var scale = this.S;
                        temp = []
                        if (this.canvas.getContext) {
                            this.ctx = this.canvas.getContext('2d');
                            this.Board[1][0] = '$'
                            for (var i = 0; i < 2 * this.N + 1; i++) {
                                for (var j = 0; j < 2 * this.M + 1; j++) {
                                    if (this.Board[i][j] != ' '){//} && this.Board[i][j] != '&') {
                                        this.ctx.fillStyle = "#0b052d";
                                        this.ctx.fillRect(scale * i, scale * j, scale, scale);
                                    }
                                    else if(i<5 && j <5)
                                        temp.push([i,j])
                                    }
                            }
                            x = randomChoice(temp)
                        
                            this.Board[x[0]][x[1]] = '&'
                            this.ctx.fillStyle = "#c4192a";
                            this.ctx.fillRect(scale* x[0], scale * x[1], scale, scale);
                        }
                    };
        
                    this.checkPos = function (id) {
                        for (var i = 0; i < 2 * this.N + 1; i++) {
                            for (var j = 0; j < 2 * this.M + 1; j++) {
                                if (this.Board[i][j] == '&') {
                                   // console.log(i,j)
                                    return [i,j]
                                }
                            }
                        }
                    }
        
                    this.moveclear = function (a,b) {
                        var scale = this.S;
                        this.ctx = this.canvas.getContext('2d');
                        this.ctx.fillStyle = "#e27158";
                        this.ctx.fillRect(scale * a, scale * b, scale, scale);
                        this.Board[a][b] = ' '
                    }
        
                    this.move =  function (a,b) {
                        var scale = this.S;
                        this.ctx = this.canvas.getContext('2d');
                        this.ctx.fillStyle = "#c4192a";
                        this.ctx.fillRect(scale * a, scale * b, scale, scale);
                        this.Board[a][b] = '&'
                    }
        
                    this.moveup = function (id) {
                        cord = this.checkPos(id);
                        var scale = this.S;
                        i = cord[0]
                        j = cord[1]
                        j -= 1
                        if (j < 0)
                            return
                        else if (j > 2 * this.M)
                            return
                        else if (this.Board[i][j] == ' ') {
                            this.moveclear(i,j+1);
                            this.move(i,j);
                            this.moves+=1;}
                        else
                            return
                    }
        
                    this.movedown = function (id) {
                        cord = this.checkPos(id);
                        var scale = this.S;
                        i = cord[0]
                        j = cord[1]
                        j+=1
                        if(j<0)
                            return
                        else if(j>2*this.M)
                            return
                        else if(this.Board[i][j] ==' ') {
                            this.moveclear(i,j-1);
                            this.move(i,j);
                            this.moves+=1;}
                        else
                            return
                    }
        
                    this.moveleft = function (id) {
                        cord = this.checkPos(id);
                        var scale = this.S;
                        i = cord[0]
                        j = cord[1]
                        i-=1
                        if(i<0)
                            return
                        else if(i>2*this.N)
                            return
                        else if(this.Board[i][j] ==' ') {
                            this.moveclear(i+1,j);
                            this.move(i,j);
                            this.moves+=1;}
                        else
                            return
                    }
        
                    this.moveright = function (id) {
                        cord = this.checkPos(id);
                        var scale = this.S;
                        i = cord[0]
                        j = cord[1]
                        i+=1
                        if(i<0)
                            return
                        else if(i>2*this.N)
                            return
                        else if(this.Board[i][j] ==' ') {
                            this.moveclear(i-1,j);
                            this.move(i,j);
                            this.moves+=1;}
                        else
                            return
                    }
                    this.checker = function (id) {
                   
                        cord = this.checkPos(id);
                        i = cord[0]
                        j = cord[1]
                  
                        if ((i == 19 && j== 20) || (i==1 && j==0)) {
                            modelfunwin();
                  
                            return 1
                        }
                        return 0
                    }
        
                    this.getMoves = function () {
                        return this.moves;
                    }
        
                };

                m = new maze(10 , 10);
                m.init();
                m.add_edges();
                m.gen_maze();
                m.draw_canvas("canvas");
                
                function drawMoves() {
                    document.getElementById("c").innerHTML = "Moves: "+ m.getMoves()
                }
               
               setInterval(drawMoves, 100);
        
                
            </script>
            <script>
        
            </script>
        
        
        </section>

        {{-- Template Part --}}
</div><!-- col-md-12-->

</div><!--end row-->
<br>
<!-- <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick ="up()" >U</button><br><br><button onclick="left()" >L</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "right()">R</button><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "down()">D</button>
<br>
<br>
<div>
<button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;color:black;border:1px solid black;" id="st" >Go back</button>
</div> -->
</div><!--end container-->
{{-- 
</div><!-- bkg-cover--> --}}
<div class="container4" style="align-text:center">
<!-- <div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick ="up()" >U</button><br><br><button onclick="left()" >L</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "right()">R</button><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "down()">D</button> -->
<div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick="up" >U</button><br><br><button onclick="left()" >L</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "right()">R</button><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "down()">D</button>
<br>
<br>
<div>
<br>
<button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;color:black;border:1px solid black;margin-left:0px" id="st" >Go back</button>
</div>
</div>
</section><!-- home-testimonials-->

{{-- <div class="zz-top-foo"></div>
@include('inc.footer') --}}
</div>
</body>
</html>
@endsection
{{-- Template Part --}}
 