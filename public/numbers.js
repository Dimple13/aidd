var i=0;
var score=0;
var val=0;
var rand=0;
var question_1;
var question_2;
var ques;
var qp;
var lit_2;
var operate;
var clicked=0;
var y;
var step=20;
var limit=200;
var percent=0;
var percent_step=10;
  
  
// document.getElementById('st').onclick = start;
function display(){
//   timer(); 
var tick=document.getElementById("tick");
var cross=document.getElementById("cross");
  tick.style.display="none";
  cross.style.display="none";
  document.getElementById("y").style.background="#3500D3";
document.getElementById("n").style.background="#3500D3";
  question_1=[5,7,6,9,8];
  question_2=[1,2,3,4];
  operator=["+","-"];
  var in_1=Math.floor(Math.random() * question_1.length);
  var in_2=Math.floor(Math.random() * question_2.length);
  var r=Math.floor(Math.random()* question_1.length);
  var op=Math.floor(Math.random()* operator.length);
  // ques=question[index].fontcolor(rand);
  // rand=getRandomColor();
  ques=question_1[in_1];
  qp=question_2[in_2];
  lit_2=question_1[r];
  operate=operator[op];
  document.getElementById("q_1").innerHTML=ques;
  document.getElementById("q_2_1").innerHTML=lit_2;
  document.getElementById("q_2_2").innerHTML=operate;
  document.getElementById("q_2_3").innerHTML=qp;
  var timeleft=10;
  var downloadTimer = setInterval(function(){
      if(timeleft <= 0 || clicked==1){
        if(y<limit)
        {
          clicked=0;
          clearInterval(downloadTimer);
          display();
        }
        else{
          clearInterval(downloadTimer);
          endgame();
        }
      }
  document.getElementById("progressBar").value = 10 - timeleft;
  document.getElementById("prg").innerHTML=timeleft;
  timeleft -= 1;
  }, 1000);
  // $("#color").css("background-color", rand);
  // document.getElementById("disp").innerHTML=rand;
}
function yes(){
  document.getElementById("y").style.background="grey";
  clicked=1;
  if(operate.includes('+'))
    {
      if(ques>(lit_2+qp))
      {
        tick.style.display="block";
        // document.getElementById("score-y").innerHTML="in YES-right-5 now";
        score=score+1;
        document.getElementById("score").innerHTML="Score:"+score;
        move();
        document.getElementById("db_score").value=score;
      }
      else
      {
        cross.style.display="block";
        score=score-1;
        document.getElementById("score").innerHTML="Score:"+score;
        document.getElementById("db_score").value=score;
      }
    }
    else{
        if(ques>(lit_2-qp))
        {
          tick.style.display="block";
            score=score+1;
            document.getElementById("score").innerHTML="Score:"+score;
            move();
            document.getElementById("db_score").value=score;
        }
        else{
          cross.style.display="block";
            score=score-1;
            document.getElementById("score").innerHTML="Score:"+score;
            document.getElementById("db_score").value=score;          
        }
    }
  // display();
}
function no(){
  document.getElementById("n").style.background="grey";
  clicked=1;
  if(operate=="+")
    {
      if(ques<(lit_2+qp))
      {
        tick.style.display="block";
        // document.getElementById("score-y").innerHTML="in NO-right-5 now";
        score=score+1;
        document.getElementById("score").innerHTML="Score:"+score;
        move();
        document.getElementById("db_score").value=score;
      }
      else
      {
        cross.style.display="block";
        // document.getElementById("score-y").innerHTML="in NO-wrong-5 now";
        score=score-1;
        document.getElementById("score").innerHTML="Score:"+score;
        document.getElementById("db_score").value=score;
        // document.getElementById("score-x").innerHTML="wrong to 2+3";
      }
    }
    else{
        if(ques<(lit_2-qp))
        {
          tick.style.display="block";
            score=score+1;
            document.getElementById("score").innerHTML="Score:"+score;
            move();
            document.getElementById("db_score").value=score;
        }
        else{
          cross.style.display="block";
            score=score-1;
        document.getElementById("score").innerHTML="Score:"+score;
        document.getElementById("db_score").value=score;
        }
    }
  // display();
}

// function getRandomColor() {
//   var color=["#FF0000","#00FF00","#0000FF","#ffff00"];
//   var index=Math.floor(Math.random() * color.length);
//   color=color[index];
//   return color;
//}
function start(clicked){
  score=0;
  clicked=0;
  y=0;
  percent=0;
  document.getElementById("progress-bar-value").innerHTML=percent+"%";
  document.getElementById("score").innerHTML="Score:"+score;
  document.getElementById("db_score").value=score;
  document.querySelector("#start").style.display="none";
  document.querySelector("#man").style.display="block";
  document.getElementById("music").play();
  display();
  
}
// function timer(){
//   var timeleft=10;
//   var downloadTimer = setInterval(function(){
//   if(timeleft < 0){
//     clearInterval(downloadTimer);
//     display();
//   }
//   document.getElementById("progressBar").value = 10 - timeleft;
//   timeleft -= 1;
//   }, 1000);
// }
function equal(){
  clicked=1;
    if(operate=="+")
    {
      if(ques==(lit_2+qp))
      {
        tick.style.display="block";
        // document.getElementById("score-y").innerHTML="in NO-right-5 now";
        score=score+1;
        document.getElementById("score").innerHTML="Score:"+score;
        move();
        document.getElementById("db_score").value=score;
      }
      else
      {
        cross.style.display="block";
        // document.getElementById("score-y").innerHTML="in NO-wrong-5 now";
        score=score-1;
        document.getElementById("score").innerHTML="Score:"+score;
        document.getElementById("db_score").value=score;
        // document.getElementById("score-x").innerHTML="wrong to 2+3";
      }
    }
    else{
        if(ques==(lit_2-qp))
        {
          tick.style.display="block";
            score=score+1;
            document.getElementById("score").innerHTML="Score:"+score;
            move();
            document.getElementById("db_score").value=score;
      }
        else{
          cross.style.display="block";
            score=score-1;
        document.getElementById("score").innerHTML="Score:"+score;
        document.getElementById("db_score").value=score;
        }
    }
  // display();
}
function move()
{
  y=document.getElementById("cb").offsetLeft;
  y= y + step;
  percent=percent+percent_step;
  if(y<limit)
  {
    document.getElementById('progress-bar-value').innerHTML=percent+'%';
    document.getElementById('cb').style.left= y + "px";
  }

}
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
function endgame()
{
  document.getElementById("form").submit();
  document.querySelector("#start").style.display="block";
  document.querySelector("#man").style.display="none";
  y=0;
  document.getElementById('cb').style.left=0+"px";
}
