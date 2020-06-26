<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Progress</title>
</head>
<style>
p {
  visibility: hidden;
  font-size:2px
}
</style>
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
<p>{{$score[0]->score_1}}</p>
<p>{{$score[0]->score_2}}</p>
<p>{{$score[0]->score_3}}</p>
<p>{{$score[0]->score_4}}</p>
<p>{{$score[0]->score_5}}</p>
  <div class="container">
    <canvas id="myChart" width="100%" height="80%" ></canvas>
  </div>
<script src="{{asset('js/graph.js')}}"></script>
</body>
</html>





















  