@extends('layouts.app1')
@section('content')
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<div id="main" class="wrap">


<section id="slider-home" class="wrap">

  <script src="{{asset('js/nav.js')}}"></script>
	<div class="container">	
    <div class="row">
    <div class="col-md-12">

    <div class="flexslider flexslider-home">
      <ul class="slides">
        <li>
        <div class="row">
        <div class="col-md-12">
        
         
          <div class="flex-caption">
            <div class="card-deck">
                <div class="card">
                  <img src="{{asset('images/exercises/TicTacToe.png')}}" class="card-img-top" alt="TicTacToe">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Tic Tac Toe</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Tic Tac Toe contributes to children’s developmental growth in numerous ways including their understanding of predictability,problem solving,spatial reasoning,hand-eye coordination,turn taking and strategizing.It is an effective educational exercise.</p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/tictactoe') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/exercises/stroop.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Stroop Test</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">The Stroop Color Test is designed to measure the ability to inhibit a prepotent reading response . When used with children, the test can also provide information regarding the development and dominance of the reading system. 
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/stroop') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/exercises/spot.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Spot the Difference</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Spot the difference is a fun exercise that helps your child to concentrate, think, and learn to notice detail.It is a classic educational exercise to train concentration and attention!
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{url('/spot')}}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
              </div>    
        </div>
          
          </div><!--.col-md-6-->
          
           {{-- <div class="col-md-6">
           <div class="flex-img">
           <img class="img-responsive" src="images/slider/slide-1.png" alt="" />
           </div>
           </div><!--.col-md-6-->
            --}}
         </div> <!--.row-->
        </li>
        
        <li>
        <div class="row">
        <div class="col-md-12">
        
         
          <div class="flex-caption">
            <div class="card-deck">
                <div class="card">
                  <img src="{{asset('images/exercises/maze.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Lost in Maze</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Completing mazes is a great way to boost a child's problem solving skills. It also boosts their patience and persistence and teaches them about the rewards of work. Mazes can also help improve a child's cognitive thought processes. Solving mazes are wonderful for improving hand-eye coordination.
                    </p>
                  </div>
                  <div class="card-footer">
                  <button style="width:100%;height:100%" onclick="window.location='{{ url('/maze') }}'"  class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/exercises/concentration.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Number Fumble</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Number Fumble is a math based exercise and basically teaches comparison of numbers.Concepts of ”Greater than”,”Less than” and “Equal to” are key in beginning to understand addition and subtraction.(Basic arithmetic operations)
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/numbers') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/exercises/memory.jpg')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Flip Cards</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Flip Cards exercise improve brain functions such as attention, concentration, and focus. It is like a memory exercise that gives space to critical thinking and helps children nurture their attention to detail.It also improves visual recognition.
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/memory') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
              </div>
          </div>
          
          </div><!--.col-md-12-->
{{--           
           <div class="col-md-6">
           <div class="flex-img">
           <img class="img-responsive" src="images/slider/slide-2.png" alt="" />
           </div>
           </div><!--.col-md-6-->
            --}}
         </div> <!--.row-->
        </li>
        
        <li>
        <div class="row">
        <div class="col-md-12">
        
         
          <div class="flex-caption">
            <div class="card-deck">
                <div class="card">
                  <img src="{{('images/exercises/memory.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Missing Letters</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Letter manipulatives give children a way to interact with the alphabet through hands-on play. They are able to feel the shape of the letter and arrange multiple letters to form letter strings or words.This exercise thus sets the stage for reading, writing, visual discrimination, and more literacy foundations.
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/MissingLetters') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
                <div class="card">
                  <img src="{{('images/exercises/flappy.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Flappy Bird</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Flappy Bird is a fun exercise where the player controls a bird, attempting to fly between columns of green pipes without hitting them. 
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/flappy') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
                <div class="card">
                  <img src="{{asset('images/exercises/snake.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Snake game</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">The game involves controlling a single block or snakehead by turning only left or right by ninety degrees until you manage to eat an apple. When you get the apple, the Snake grows an extra block or body segment.
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/shape') }}'" class="btn btn-dark">Play Now</button>
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                  </div>
                </div>
              </div>
          </div>
          
          </div><!--.col-md-12-->
{{--           
           <div class="col-md-6">
           <div class="flex-img">
           <img class="img-responsive" src="images/slider/slide-3.png" alt="" />
           </div>
           </div><!--.col-md-6-->
            --}}
         </div> <!--.row-->
        </li>
    
       
      </ul>
    </div><!--end flexslider-->    
    </div><!--.col-md-12-->
    </div><!--.row-->
    </div><!--.container-->    
  </section><!--slider-home-->
@include('inc.footer')
</div>
</body>

@endsection
