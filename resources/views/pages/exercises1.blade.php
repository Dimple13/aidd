@extends('layouts.app')

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
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/letters') }}'" class="btn btn-dark">Play Now</button>
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
                  <img src="{{asset('images/exercises/maze.png')}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title home-title-section">Maze</h5>
                    <p class="card-text" style="font-family:Serif,Cabin Sketch">Completing mazes is a great way to boost a child's problem solving skills. It also boosts their patience and persistence and teaches them about the rewards of work. Mazes can also help improve a child's cognitive thought processes. Solving mazes are wonderful for improving hand-eye coordination.
                    </p>
                  </div>
                  <div class="card-footer">
                      <button style="width:100%;height:100%" onclick="window.location='{{ url('/maze') }}'" class="btn btn-dark">Play Now</button>
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
  <div class="zz-bottom"></div>

<section id="home-features" class="wrap margin-t72">

<div class="container">
    <h2 class="home-title-section margin-b54">Practice with heads</h2>
<div class="row">
<div class="col-md-4 home-feature">
<h5>Concentration</h5>
<div class="img-feature"><img class="img-responsive" style="width:150px;height:150px;border-radius:50%" src="../public/images/exercises/concentration.jpg" alt=""/></div>
<p>Duis nec mi porta, porttitor ipsum ac, consectetur felis. Integer adipiscing tristique volutpat. Duis mi nunc, placerat eu hendrerit ut, sagittis quis quam.</p>

<a href="#" class="btn-color margin-t32">Read More</a>
</div><!--end home-feature-->

<div class="col-md-4 home-feature">
<h5>Attention</h5>
<div class="img-feature"><img class="img-responsive" style="width:150px;height:150px;border-radius:50%" src="../public/images/exercises/att.png" alt=""/></div>
<p>Duis nec mi porta, porttitor ipsum ac, consectetur felis. Integer adipiscing tristique volutpat. Duis mi nunc, placerat eu hendrerit ut, sagittis quis quam.</p>

<a href="#" class="btn-color margin-t32">Read More</a>
</div><!--end home-feature-->

<div class="col-md-4 home-feature">
<h5>Memory</h5>
<div class="img-feature"><img class="img-responsive" style="width:150px;height:150px;border-radius:50%" src="../public/images/exercises/memory.png" alt=""/></div>
<p>Duis nec mi porta, porttitor ipsum ac, consectetur felis. Integer adipiscing tristique volutpat. Duis mi nunc, placerat eu hendrerit ut, sagittis quis quam.</p>

<a href="#" class="btn-color margin-t32">Read More</a>
</div><!--end home-feature-->

</div><!--end row-->
</div><!--end container-->

</section><!--home-features-->


<div class="zz-top"></div>
<section id="home-play" class="wrap margin-t72">

<div class="bkg-cover padding-72">

<h2 class="home-title-section margin-b54">Come and play with us</h2>

<div class="container">

<div class="row">

<div class="col-md-6">

<h4 class="margin-b24">Integer pretium egestas turpis pretium adipiscing tristique</h4>

<p>Suspendisse tempor sollicitudin consectetur. Duis tincidunt vulputate velit, a lobortis dolor porttitor vitae. Integer pellentesque eros vel nisi tincidunt posuere. Nullam mollis vel nulla a facilisis. Quisque blandit commodo orci,ut rhoncus lacus interdum ac. Pellentesque urna purus, fermentum quis turpis eu. Mauris vehicula eleifend metus.</p>

<p>Dolor mi, ac viverra nulla faucibus a. Morbi mi urna, scelerisque nec ornare ut, aliquet ut mi. Aliquam erat volutpat. Proin dignissim tempus cursus. Donec tincidunt, velit ut egestas egestas, metus massa mattis mauris, eu lacinia risus risus quis ligula. Quisque gravida erat in risus malesuada, sed pulvinar risus pellentesque. Etiam porttitor enim at lacinia laoreet. Praesent quis nulla non orci semper porta. </p>

</div><!--end col-md-6-->

<div class="col-md-6">

<div class="home-play-holder clearfix">

<div class="home-play-img">

<img src="images/home/play-1.jpg" alt="" />

</div><!--end home-play-img-->

<div class="home-play-text">

<h5 class="margin-b16">Drawing</h5>

<p>Praesent lobortis ullamcorper hendrerit. Nulla tellus sapien, fermentum sit amet ultricies sed, blandit et nisl. Sed cursus lorem sem, vel consectetur ipsum tincidunt at.</p>

</div><!--end home-play-text-->

</div><!--end home-play-holder-->


<div class="home-play-holder clearfix">

<div class="home-play-img">

<img src="images/home/play-2.jpg" alt="" />

</div><!--end home-play-img-->

<div class="home-play-text">

<h5 class="margin-b16">Bubbles</h5>

<p>Praesent lobortis ullamcorper hendrerit. Nulla tellus sapien, fermentum sit amet ultricies sed, blandit et nisl. Sed cursus lorem sem, vel consectetur ipsum tincidunt at.</p>

</div><!--end home-play-text-->

</div><!--end home-play-holder-->

<div class="home-play-holder clearfix">

<div class="home-play-img">

<img src="images/home/play-3.jpg" alt="" />

</div><!--end home-play-img-->

<div class="home-play-text">

<h5 class="margin-b16">Games</h5>

<p>Praesent lobortis ullamcorper hendrerit. Nulla tellus sapien, fermentum sit amet ultricies sed, blandit et nisl. Sed cursus lorem sem, vel consectetur ipsum tincidunt at.</p>

</div><!--end home-play-text-->

</div><!--end home-play-holder-->


</div><!--end col-md-6-->

</div><!--end row-->

</div><!--end container-->

</div><!--bkg-cover-->

</section><!--home-play-->
<div class="zz-bottom"></div>

<section id="home-latest-activity" class="wrap margin-t72">

<h2 class="home-title-section txt-color margin-b54">Latest Activity</h2>

<div class="container">

<div class="row gallery-holder">

<div class="col-md-4">

<figure class="img-overlay gal-img">

<a href="images/gallery/gallery-1/img-11.jpg" class="lightbox" data-rel="prettyPhoto[gallery]" title="Image 1">
<span class="btn-more btn-zoom"></span>
<img class="img-responsive" src="images/gallery/gallery-1/img-11.jpg" alt=""></a></figure>

</div><!--end col-md-4-->

<div class="col-md-4">

<figure class="img-overlay gal-img">

<a href="images/gallery/gallery-1/img-12.jpg" class="lightbox" data-rel="prettyPhoto[gallery]" title="Image 2">
<span class="btn-more btn-zoom"></span>
<img class="img-responsive" src="images/gallery/gallery-1/img-12.jpg" alt=""></a></figure>

</div><!--end col-md-4-->

<div class="col-md-4">

<figure class="img-overlay gal-img">

<a href="images/gallery/gallery-1/img-13.jpg" class="lightbox" data-rel="prettyPhoto[gallery]" title="Image 3">
<span class="btn-more btn-zoom"></span>
<img class="img-responsive" src="images/gallery/gallery-1/img-13.jpg" alt=""></a></figure>

</div><!--end col-md-4-->

<div class="alignc"><a href="gallery-3col.html" class="btn-color margin-t54">View Gallery</a></div>

</div><!--end row-->

</div><!--end container-->

</section><!--home-latest-activity-->


<div class="zz-top"></div>
<section id="home-event" class="wrap margin-t72">

<div class="bkg-cover padding-72">

<h2 class="home-title-section margin-b54">Upcoming Event</h2>

<div class="container">


<div class="row">

<ul class="event-big-meta">
<li><i class="fa fa-calendar"></i> May 24, 2014</li>
<li><i class="fa fa-clock-o"></i> 10 AM - 12 AM</li>
<li><i class="fa fa-map-marker"></i> 31 Old Broad St</li>
<li><i class="fa fa-phone"></i> 000 111 2222</li>
</ul>

<div class="col-md-8">

<h4 class="margin-t54">Discover National History Museum</h4>

<p>Proin tempor posuere felis. Quisque et dui dui. Integer vehicula ornare felis, a tincidunt nunc elementuam pulvinar. Nulla vehicula neque id erat cursus interdum. Suspendisse tristique tortor ac elit eleifend egestas. Integer pretium feugiat sapien non diam hendrerit, at porta.</p>

</div><!--end col-md-6-->

<div class="col-md-4">

<img class="img-responsive margin-t54" src="images/events/event-1.jpg" alt="" />

</div><!--end col-md-6-->

<p class="alignc"><a href="single-event.html" class="btn-white margin-t32">View Details</a></p>

</div><!--end row-->

</div><!--end container-->

</div><!--bkg-cover-->

</section><!--home-event-->
<div class="zz-bottom"></div>


<section id="home-latest-news" class="wrap margin-t72">

<h2 class="home-title-section txt-color margin-b54">Latest News</h2>

<div class="container">
<div class="row">

<div class="col-sm-7 col-md-8">

<article class="blog-post">

<a href="single-blog-post.html"><img class="img-responsive margin-b32" src="images/blog/blog-1.jpg" alt="" /></a>

<div class="clearfix margin-b32">

<div class="date-meta">
<span class="date-big">25</span>
<span class="date-small">May, 2014</span>
</div><!-- end date-meta -->

<div class="blog-title">

<h4><a href="single-blog-post.html">Do you want chocolate milk with cookies?</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-folder"></i><a href="#">News</a></li>
<li><i class="fa fa-comments"></i> <a href="#">3 Comments</a></li>
</ul>

</div><!-- end blog-title -->

</div><!-- end clearfix -->

<p>Suspendisse mollis pellentesque viverra. Maecenas vitae lorem urna. Nullam aliquam justo vel lorem interdum consectetur. Vivamus et molestie tellus, nec pharetra nisi. Morbi malesuada feugiat tincidunt. Nullam sit amet tempus ante. Donec ac urna tristique, dapibus magna sed, elementum tellus. </p>

</article><!--end blog-post-->

</div><!--end col-md-8-->


<div class="col-sm-5 col-md-4">

<div class="small-post margin-b32">

<div class="blog-title">

<h4><a href="#">How to draw a butterfly</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-calendar"></i> May 22, 2015</li>
</ul>

</div><!-- end blog-title -->

</div><!-- end small-post -->

<div class="small-post margin-b32">

<div class="blog-title">

<h4><a href="#">It was a crazy week of learning</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-calendar"></i> May 21, 2015</li>
</ul>

</div><!-- end blog-title -->

</div><!-- end small-post -->

<div class="small-post margin-b32">

<div class="blog-title">

<h4><a href="#">Every kid can make a difference</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-calendar"></i> May 20, 2015</li>
</ul>

</div><!-- end blog-title -->

</div><!-- end small-post -->

<div class="small-post margin-b32">

<div class="blog-title">

<h4><a href="#">Kids love to play mobile games</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-calendar"></i> May 18, 2015</li>
</ul>

</div><!-- end blog-title -->

</div><!-- end small-post -->

<div class="small-post margin-b32">

<div class="blog-title">

<h4><a href="#">Cartoons from another time</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-calendar"></i> May 16, 2015</li>
</ul>

</div><!-- end blog-title -->

</div><!-- end small-post -->

<div class="small-post margin-b32">

<div class="blog-title">

<h4><a href="#">Where the wild things are</a></h4>

<ul class="blog-meta">
<li><i class="fa fa-calendar"></i> May 15, 2015</li>
</ul>

</div><!-- end blog-title -->

</div><!-- end small-post -->


</div><!--end col-md-4-->

</div><!--end row-->

</div><!--end container-->

</section><!--home-latest-news-->


<div class="zz-top"></div>
<section id="home-testimonials" class="wrap margin-t72">

<div class="bkg-cover padding-72">

<div class="container">
<div class="row">
<div class="col-md-12">

<div class="flexslider flexslider-testimonials">
            <ul class="slides">
              <li>
              <div class="clearfix">
               <div class="client-avatar"> <img src="images/testimonials/client-1.jpg" alt=""/></div>
               <div class="client-quote"><p> "Curabitur sit amet ligula vitae lorem consequat condimentum id in mauris. Vivamus pretium aliquet sapien, ut commodo risus. Fusce erat orci, tempus vitae mi ac, interdum sollicitudin felis. "</p>
               <h6>Marie Doe, <span>parent</span></h6>
               </div>
               
              </div>
              </li>
              
               <li>
              <div class="clearfix">
               <div class="client-avatar"> <img src="images/testimonials/client-2.jpg" alt=""/></div>
               <div class="client-quote"><p> "Suspendisse elementum turpis vitae libero lobortis laoreet. Quisque et dui dui integer vehicula ornare felis. Morbi malesuada feugiat tincidunt. Nullam sit amet tempus ante."</p>
               <h6>John Doe, <span>parent</span></h6>
               </div>
               
              </div>
              </li>
              
               <li>
              <div class="clearfix">
               <div class="client-avatar"> <img src="images/testimonials/client-3.jpg" alt=""/></div>
               <div class="client-quote"><p> "Dolor mi, ac viverra nulla faucibus a. Morbi mi urna, scelerisque nec ornare ut, aliquet ut mi. Aliquam erat volutpat. Proin dignissim tempus cursus. Donec tincidunt, velit ut egestas egestas."</p>
               <h6>April Doe, <span>parent</span></h6>
               </div>
               
              </div>
              </li>

			</ul>

</div><!-- flexslider-testimonials-->            
</div><!-- col-md-12-->

</div><!--end row-->

</div><!--end container-->

</div><!-- bkg-cover-->

</section><!-- home-testimonials-->

<div class="zz-top-foo"></div>
@include('inc.footer')
</div>
</body>

@endsection
