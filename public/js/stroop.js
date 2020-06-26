var i=0;
var score=0;
var val=0;
var rand=0;
var question;
var ques;
var interval;
var hints=document.getElementsByClassName("hints");
var tri_up=document.querySelector("#triangle-up");
var tri_down=document.querySelector("#triangle-down");
var interval;

function display(){
  question=["Red?","Green?","Yellow?","Blue?"];
  var index=Math.floor(Math.random() * question.length);
  rand=getRandomColor();
  ques=question[index].fontcolor(rand);
  document.getElementById("q").innerHTML=ques;
  $("#color").css("background-color", rand);
  if(score < 10)
  {
    // $("#hint_1").fadeIn(1000);
    // $("#triangle-down").fadeIn(1000);
    hints[0].style.visibility="visible";
    hints[0].style.opacity="1";
    hints[0].style.transition="visibility 0s linear 0s, opacity 1000ms";
    hints[1].style.visibility="visible";
    hints[1].style.opacity="1";
    hints[1].style.transition="visibility 0s linear 0s, opacity 1000ms";
    tri_down.style.visibility="visible";
    tri_down.style.opacity="1";
    tri_down.style.transition="visibility 0s linear 0s, opacity 1000ms";
    tri_up.style.visibility="visible";
    tri_up.style.opacity="1";
    tri_up.style.transition="visibility 0s linear 0s, opacity 1000ms"; 
  }
  else{
    // $("#hint_1").css("visibility:hidden");
    // $("#triangle-down").fadeOut(1000);
    hints[0].style.visibility="hidden";
    hints[0].style.opacity="0";
    hints[0].style.transition="visibility 300s linear 0s, opacity 1000ms";
    hints[1].style.visibility="hidden";
    hints[1].style.opacity="0";
    hints[1].style.transition="visibility 300s linear 0s, opacity 1000ms";
    tri_down.style.visibility="hidden";
    tri_down.style.opacity="0";
    tri_down.style.transition="visibility 300s linear 0s, opacity 1000ms";
    tri_up.style.visibility="hidden";
    tri_up.style.opacity="0";
    tri_up.style.transition="visibility 300s linear 0s, opacity 1000ms"; 
  }
}
function countdown() {
  clearInterval(interval);
  interval = setInterval( function() {
      var timer = $('.js-timeout').html();
      timer = timer.split(':');
      var minutes = timer[0];
      var seconds = timer[1];
      seconds -= 1;
      if (minutes < 0) return;
      else if (seconds < 0 && minutes != 0) {
          minutes -= 1;
          seconds = 59;
      }
      else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;

      $('.js-timeout').html(minutes + ':' + seconds);

      if (minutes == 0 && seconds == 0){ 
        clearInterval(interval);
        endgame();
      }
  }, 1000);
}

function yes(){
  if(rand.includes('#FF') && ques.includes('Red?'))
    {
        score=score+1;
       document.getElementById("score").innerHTML="Score:"+score;
       document.getElementById("db_score").value=score;
    }
  else if(rand.includes('#00FF') && ques.includes('Green?'))
    {
      score=score+1;
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
  else if(rand.includes('#ffff') && ques.includes('Yellow?'))
    {
      score=score+1;
      
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
  else if(rand.includes('#0000') && ques.includes('Blue?'))
    {
      score=score+1;
      
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
 
  else
    {
      score=score-1;
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
      // document.getElementById("score-x").innerHTML="wrong";
    }
  display();
}
function no(){
  if(rand.includes('#FF') && ques.includes('Red?'))
    {
        score=score-1;
       document.getElementById("score").innerHTML="Score:"+score;
       document.getElementById("db_score").value=score;
    }
  else if(rand.includes('#00FF') && ques.includes('Green?'))
    {
      score=score-1;
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
  else if(rand.includes('#ffff') && ques.includes('Yellow?'))
    {
      score=score-1;
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
  else if(rand.includes('#0000') && ques.includes('Blue?'))
    {
      score=score-1;
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
  else
    {
      score=score+1;     
      document.getElementById("score").innerHTML="Score:"+score;
      document.getElementById("db_score").value=score;
    }
  display();
}

function getRandomColor() {
  var color=["#FF0000","#00FF00","#0000FF","#ffff00"];
  var index=Math.floor(Math.random() * color.length);
  color=color[index];
  return color;
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

function pause_timer(){
  clearInterval(interval);
}
function start(clicked){
  score=0;
  document.getElementById("score").innerHTML="Score:"+score;
  document.getElementById("db_score").value=score;
  document.querySelector("#start").style.display="none";
  document.querySelector("#man").style.display="block";
  document.getElementById("music").play();
  display();
  countdown();
}
//End exercise function
function endgame()
{
  document.getElementById("form").submit();
  document.querySelector("#start").style.display="block";
  document.querySelector("#man").style.display="none";
 }
