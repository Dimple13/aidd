@extends('layouts.app')

@section('content')

<div id="main" class="wrap">
      
    
    <section class="page-top wrap">
    
        <h2 class="page-section-title">Login </h2>
    
    </section><!-- page-top -->
      <div class="zz-bottom"></div>
    
    <section class="page-content wrap" style="padding: 20px 0px 87px 0px;">
    
<div class="container">
<center><p style="font-size:30px">Login as</p></center>
    <div class="row justify-content-center">
        <center><div class="col-md-6">
        <button onclick="location.href = '{{url('/admin/login')}}'" style="height:50px;width:100px;background-color: #3CBEE6;color:white;font-size:15px;border:0px" id="st" >Parent/Doctor</button>   
        </div></center>
        <center><div class="col-md-6">
        <button onclick="location.href = '{{url('/login')}}'" style="height:50px;width:100px;background-color: #3CBEE6;color:white;font-size:15px;border:0px" id="st" >Child</button>   
        </div></center>
    </div>
</div>
</section>
</div>
<script type='text/javascript' src="{{asset('js/nav.js')}}"></script>  
@endsection
