// HEADING AND NAVIGATION:
var counter_var;
const intro = document.getElementsByClassName("intro")[0],
      startButton = document.getElementById("start");
let taskDisplay = document.getElementById("task"),
    pictureDisplay = document.querySelector(".pictures"),
    round = document.getElementById("round"),
    score = document.getElementById("score"),
    time = document.getElementById("time"),
    attempt = document.getElementById("attempt"),
    timer = 20,
    attempts = 3,
    gameScore = 0,
    roundCount = 0,
    topScore = localStorage.getItem("topScore") || 0;

//Scoring variable for navbar and form submission
disp_score=document.getElementById("disp_score");
db_score=document.getElementById("db_score");  

// IMAGES
let imageA = document.getElementById("imageA"),
    imageB = document.getElementById("imageB");

// RANDOM IMAGE INDICES ARRAY
let imageIndexArray = createSequentialArray();

// CURRENTLY SELECTED IMAGE INDEX
let randomPicIndex, 
    img1, 
    img2;

// TASK, DIFFERENCES, OPTIONS
const task = document.getElementById("task");
let actualDifferences, 
    fakeDifferences, 
    randomTrueDiff, 
    randomFalseDiff,
    listEls,
    result = document.createElement("p"),
    correctGuesses = 0,
    newGame;

score.textContent = gameScore;
round.textContent = roundCount;

// Scoring for navbar & db
disp_score.textContent = gameScore;
db_score.value = gameScore;



// FUNCTIONS:
function createSequentialArray() {
  let tmpArr = [];
  for (let idx = 0; idx < images.length; idx++) {
    tmpArr.push(idx);
  }
  return tmpArr;
}

function fetchRandomImage() {
  let imgIndex = undefined;
  if (imageIndexArray.length === 1) {
    imgIndex = imageIndexArray[0];
    imageIndexArray.splice(0, 1);
  } else {
    const randomIdx = Math.floor(Math.random() * imageIndexArray.length);
    imgIndex = imageIndexArray[randomIdx];
    imageIndexArray.splice(randomIdx, 1);
  }
  return imgIndex;
}

startButton.addEventListener("click", start);
 
function start() {
  resetScore();
  reset();
  intro.classList.add("hide");
  document.getElementById("music").play();
  
  startButton.removeEventListener("click", start);
  intro.removeChild(startButton);
}

function nextRound() {
  newGame.removeEventListener('click', nextRound);
  remove();
  roundCount = roundCount + 1;
  round.textContent = roundCount;
  reset();
}

function startOver() {
  newGame.removeEventListener('click', startOver);
  remove();
  resetScore();
  reset();
}

function reset() {
  attempts = 3;
  attempt.textContent = attempts;
  timer=20;
  document.getElementById("time").innerhtml=timer.toString();
 
  randomPicIndex = fetchRandomImage();
  img1 = images[randomPicIndex].img[0];
  img2 = images[randomPicIndex].img[1];
  imageA.setAttribute("src", img1);
  imageB.setAttribute("src", img2);
  fade();
  
  actualDifferences = images[randomPicIndex].actual;
  fakeDifferences = images[randomPicIndex].fake;
  randomTrueDiff = randomize(actualDifferences, 2);
  randomFalseDiff = randomize(fakeDifferences, 3);
  assignDifferences();

  listEls = document.querySelectorAll("#options > li");
  listEls = Array.prototype.slice.call(listEls);
  clickEvents();
}

function resetScore () {
  gameScore = 0;
  score.textContent = gameScore;
  roundCount = 1;
  round.textContent = roundCount;

  // Reseting scores for display and db
  disp_score.textContent = gameScore;
  db_score.value = gameScore;
  
}

function randomize(array, num) {
  let differences = array.slice(0); // create a copy of the actual array to prevent from modifying it
  let tempArr = []; // create a temporary array
  for (let i = 0; i < num; i++) {
    let random = Math.floor(Math.random() * differences.length);
    let difference = differences[random];
    tempArr.push(difference);
    differences.splice(random, 1); // get rid of the value from the original array to prevent from duplicates in the temp array
  }
  return tempArr;
}

function assignDifferences() {
  let options = document.getElementById("options");

  randomTrueDiff.forEach(function(truediff) {
    let option = document.createElement("li");
    option.textContent = truediff;
    options.appendChild(option);
  });
  randomFalseDiff.forEach(function(fakediff) {
    let option = document.createElement("li");
    option.textContent = fakediff;
    options.appendChild(option);
  });


for (let i = options.children.length; i >= 0; i--) {
  options.appendChild(options.children[(Math.random() * i) | 0]);
  }
}

function clickEvents() {
  listEls.forEach(function(listEl) {
    listEl.addEventListener("click", evaluate);
  });
}

function evaluate() {
  this.removeEventListener('click', evaluate);
  let clicked = this.textContent;

  if (actualDifferences.includes(clicked)) {
    this.style.color = "green";
    correctGuesses++;
    if (correctGuesses === 2) {
      gameScore += attempts > 2 ? 5 : attempts;
      score.textContent = gameScore;
      // Scoring my variables for disp and db
      disp_score.textContent = gameScore;
      db_score.value = gameScore;
      if (imageIndexArray.length === 0) {
        gameOver();
      } else {
        appendResults(taskDisplay, result, startButton);
        swal("Good job!", "Click the Next button!", "success",);
        
        removeListeners(listEls, evaluate);
        correctGuesses = 0;
        addButton('Next', nextRound);
      }
    }
  } else {
    this.style.color = "red";
    attempts--;
    attempt.textContent = attempts;
    if (attempts === 0) {
      gameOver();
    }
  }
}

function gameOver() {
  if (gameScore > topScore) {
    topScore = gameScore;
    localStorage.setItem("topScore", gameScore.toString());
  }
  if (imageIndexArray.length === 0 && attempts > 0) {
    
    swal("Congrats", "your top score is:"+topScore, "success",);
  

  } else {
    message1="Game over! You topscore is"+topScore
    swal({
      title:message1,
    
      icon:"success",
      timer:4000,
    })

  }
  document.getElementById("form").submit();
  removeListeners(listEls, evaluate);
  appendResults(taskDisplay, result, startButton);
  addButton('New Game', startOver);
  imageIndexArray = createSequentialArray();
  attempts = 3;
  correctGuesses = 0;
}

function appendResults (parent, child_1, child_2) {
  parent.appendChild(child_1);
  parent.appendChild(child_2);
}

function addButton (text, callback) {
  newGame = document.querySelector("#task > #start");
  newGame.textContent = text;
  newGame.addEventListener("click", callback);
}

function removeListeners (array, callback) {
  array.forEach(function(el) {
    el.removeEventListener("click", callback);
  });
}

function fade() {
  pictureDisplay.classList.remove("hide");
  counter();
  setTimeout(function() {
    pictureDisplay.classList.add("fadeOut");
    setTimeout(function() {
      pictureDisplay.classList.add("hide");
      pictureDisplay.classList.remove("fadeOut");
      taskDisplay.classList.remove("hide");
      taskDisplay.classList.add("fadeIn");
    }, 2000);
  }, 20000);
}

function remove() {
  result.textContent = "";
  taskDisplay.removeChild(result);
  taskDisplay.removeChild(startButton);
  for (var i = 0; i < listEls.length; i++) {
    listEls[i].remove();
  }
  taskDisplay.classList.add("hide");
}

function counter() {
   counter_var = setInterval(function() {
    if (timer >= 0) {
      time.textContent = timer;
      timer--;
    } else {
      clearInterval(counter_var);
      timer = document.getElementById("time");
      time.textContent = "";
      attempt.textContent = attempts;
    }
  }, 1000);
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