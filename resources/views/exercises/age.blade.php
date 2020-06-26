@extends('layouts.exe')
@section('content') 
 <form action='{{url('/age_result')}}' method="GET">
    <div class="text-center" style="font-family: 'Cabin Sketch';font-size: 20px;">
     Your age <input type="text" id="age" name="age">
     <input type="submit" value="submit" class="btn btn-success"> 
    </div>
    
</form> 
@endsection