var words= ["river", "honey", "flower","joker"];
var correctans=null;
var word,score=0;
var interval;
var res;
var seconds=10;
function questions()
{
  document.getElementById("ans").innerHTML ="";
  word = words[Math.floor(Math.random() * words.length)];

var str = word.split("");
res = word.split("");
var letter = res[Math.floor(Math.random() * res.length)];

for(i=0;i<(res.length);i++)
{
	if(res[i]==letter)
	{
		res[i]="_";
	}
}
document.getElementById("score").innerHTML=score;
var txt = "";

 res.forEach(myFunction);

 function myFunction(value) {
   txt = txt + value + " "; 
  }
document.getElementById("txt").innerHTML=txt;


function generateRandom(min, max) {
  var num = Math.floor(Math.random() * (max - min + 1)) + min;
  return (num === letter.charCodeAt()) ? generateRandom(min, max) : num;
}



var a = String.fromCharCode(generateRandom(97,122));
var b = String.fromCharCode(generateRandom(97,122));
var c = String.fromCharCode(generateRandom(97,122)); 
var d = letter; 
correctans=letter;

function between(min, max) {  
return Math.floor(
  Math.random() * (max - min) + min
)
}

function shuffle(array) {
var currentIndex = array.length, temporaryValue, randomIndex;

// While there remain elements to shuffle...
while (0 !== currentIndex) {

  // Pick a remaining element...
  randomIndex = Math.floor(Math.random() * currentIndex);
  currentIndex -= 1;

  // And swap it with the current element.
  temporaryValue = array[currentIndex];
  array[currentIndex] = array[randomIndex];
  array[randomIndex] = temporaryValue;
}

return array;
}
var arr=[];
arr.push(a);
arr.push(b);
arr.push(c);
arr.push(d);

shuffle(arr);


// var e= between(97,101);
document.getElementById("b[0]").innerHTML=arr[0];
document.getElementById("b[1]").innerHTML=arr[1];
document.getElementById("b[2]").innerHTML=arr[2];
document.getElementById("b[3]").innerHTML=arr[3];



document.getElementById("b[0]").setAttribute("value", arr[0]);
document.getElementById("b[1]").setAttribute("value", arr[1]);
document.getElementById("b[2]").setAttribute("value", arr[2]);
document.getElementById("b[3]").setAttribute("value", arr[3]);

}
var delayInMilliseconds = 1000; //1 second


function result(ip){
  
if(ip==correctans){
  score=score+1;
	document.getElementById("ans").innerHTML ="Correct Answer ";
	setTimeout(function() {
    questions();
    
  }, delayInMilliseconds);}

else 
	{
    document.getElementById("ans").innerHTML ="Wrong Answer <br /> Correct Answer is "+word;
	setTimeout(function() {
  questions();
}, delayInMilliseconds);}

}
// function countdown() {
//   clearInterval(interval);
  
//   interval = setInterval( function() {
//       var timer = $('.js-timeout').html();
//       alert("Hi");
//       timer = timer.split(':');
//       var minutes = timer[0];
//       var seconds = timer[1];
//       seconds -= 1;
//       if (minutes < 0) return;
//       else if (seconds < 0 && minutes != 0) {
//           minutes -= 1;
//           seconds = 59;
//       }
//       else if (seconds < 10 && length.seconds != 2) seconds = '0' + seconds;
//       $('.js-timeout').html(minutes + ':' + seconds);

      // if (minutes == 0 && seconds == 0){ 
      //   clearInterval(interval);
      //   endgame();
      // }
//   }, 1000);
// }

function start(clicked){

  document.querySelector("#start").style.display="none";
  document.querySelector("#man").style.display="block";
  score=0;
  seconds = 10;
  
  questions();
  // countdown();
}
function endgame()
{
  // document.getElementById("form").submit();

//   swal({
//     title: "Good job!",
//     text: "You completed the game!",
//     icon: "success",
//   });
  document.querySelector("#start").style.display="block";
  document.querySelector("#man").style.display="none";
  seconds = 10;
  isWaiting = false;
  isRunning = false;
  finalCountdown = false;
 }

var isWaiting = false;
var isRunning = false;
var countdownTimer;
var finalCountdown = false;

function GameTimer() {
    var minutes = Math.round((seconds - 30) / 60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;
    }
    document.getElementById('waiting_time').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        isRunning = true;
        seconds += 2;
        
        if (finalCountdown) {
            clearInterval(countdownTimer);
        } else {
            finalCountdown = true;
        }

    } else {
        isWaiting = true;
        seconds--;
    }

    if (minutes == 0 && seconds == 0){ 
      clearInterval(interval);
      endgame();
    }
}
countdownTimer = setInterval(GameTimer, 1000);


