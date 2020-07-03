<!--
YOU BETTA CHECK OUT MY OTHER PROJECTS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
But first check out this one.
-->

<!DOCTYPE html>
<html>
<head>
<meta content='width=device-width, initial-scale=1' name='viewport'/>

  <title>Snake Game</title>
  <style>
  html, body {
	height: 100%;
	margin: 0px;
  }

  body {
	/* background: black; */
	display: flex;
	align-items: center;
	justify-content: center;
  }
  canvas {
	border: 1px solid white;
    background: black;
  }
  button {
	border-radius :5px;
	border : 5px solid black;
	background-color : black;
	position:absolute ;
    color:white;
    }
    body {
	flex-direction: column;
    }
  </style>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background:url({{asset('images/bkg.svg')}}) repeat scroll center center #E9F8FC;">
<h1 style="margin-top:0px">Snake Game</h1>
<canvas width="300" height="300" id="game"></canvas>
<script>
var canvas = document.getElementById('game');
var context = canvas.getContext('2d');

var grid = 12;
var count = 0;
var wrong_move=0;
var correct_move=0;
var diff=0;
  
var snake = {
  x: 0,
  y: 0,
  
  // snake velocity. moves one grid length every frame in either the x or y direction
  dx: grid,
  dy: 0,
  
  // keep track of all grids the snake body occupies
  cells: [],
  
  // length of the snake. grows when eating an apple
  maxCells: 4
  
};
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
var apple = {
  x: getRandomInt(0,25) * grid,
  y: getRandomInt(0,25) * grid
};
// game loop
function loop() {
  requestAnimationFrame(loop);

  // slow game loop to 15 fps instead of 60 (60/15 = 4)
  if (++count < 8) {
	return;
  }

  count = 0;
  context.clearRect(0,0,canvas.width,canvas.height);

  // move snake by it's velocity
  snake.x += snake.dx;
  snake.y += snake.dy;

  // wrap snake position horizontally on edge of screen
  if (snake.x < 0) {
	snake.x = canvas.width - grid;
  }
  else if (snake.x >= canvas.width) {
	snake.x = 0;
  }
  
  // wrap snake position vertically on edge of screen
  if (snake.y < 0) {
	snake.y = canvas.height - grid;
  }
  else if (snake.y >= canvas.height) {
	snake.y = 0;
  }

  // keep track of where snake has been. front of the array is always the head
  snake.cells.unshift({x: snake.x, y: snake.y});

  // remove cells as we move away from them
  if (snake.cells.length > snake.maxCells) {
	snake.cells.pop();
  }

  // draw apple
  if((snake.dy<0 && snake.y<apple.y) || (snake.dx<0 && snake.x<apple.x) || (snake.dy>0 && snake.y>apple.y) || (snake.dx>0 && snake.x>apple.x))
   { wrong_move++;
  }
  else
  {
    correct_move++;
  }
  context.fillStyle = 'red';
  context.fillRect(apple.x, apple.y, grid, grid);

  // draw snake one cell at a time
  context.fillStyle = 'green';
  snake.cells.forEach(function(cell, index) {
	
	// drawing 1 px smaller than the grid creates a grid effect in the snake body so you can see how long it is
	context.fillRect(cell.x, cell.y, grid, grid);  

	// snake ate apple
	if (cell.x === apple.x && cell.y === apple.y) {
    
	  snake.maxCells += 4;

	  // canvas is 400x400 which is 25x25 grids 
	  apple.x = getRandomInt(0, 25) * grid;
	  apple.y = getRandomInt(0, 25) * grid;
	}

	// check collision with all cells after this one (modified bubble sort)
	for (var i = index + 1; i < snake.cells.length; i++) {
        
	  // snake occupies same space as a body part. reset game
	  if (cell.x === snake.cells[i].x && cell.y === snake.cells[i].y) {
		snake.x = 0;
		snake.y = 0;
		snake.cells = [];
		snake.maxCells = 4;
		snake.dx = grid;
		snake.dy = 0;


		apple.x = getRandomInt(0, 25) * grid;
		apple.y = getRandomInt(0, 25) * grid;
    diff=(correct_move-wrong_move)/correct_move;
    document.getElementById("diff").innerHTML=diff;
   

    console.log(diff);
    wrong_move=0;
    correct_move=0;
      }
      
    }
    
  });
}

// listen to keyboard events to move the snake
document.addEventListener('keydown', function(e) {
  // prevent snake from backtracking on itself by checking that it's 
  // not already moving on the same axis (pressing left while moving
  // left won't do anything, and pressing right while moving left
  // shouldn't let you collide with your own body)
  
  // left arrow key
  if (e.which === 37 && snake.dx === 0) {
	snake.dx = -grid;
	snake.dy = 0;
  }
  // up arrow key
  else if (e.which === 38 && snake.dy === 0) {
	snake.dy = -grid;
	snake.dx = 0;
  }
  // right arrow key
  else if (e.which === 39 && snake.dx === 0) {
	snake.dx = grid;
	snake.dy = 0;
  }
  // down arrow key
  else if (e.which === 40 && snake.dy === 0) {
	snake.dy = grid;
	snake.dx = 0;
  }

});
function up(){
	  if (snake.dy === 0) {
		snake.dy = -grid;
		snake.dx = 0;
	
  }
  }
  function down(){
	  if (snake.dy === 0) {
		snake.dy = grid;
		snake.dx = 0;
	  }
  }
  function right(){
	  if (snake.dx === 0) {
		snake.dx = grid;
		snake.dy = 0;
	  }
  }
  function left(){
	  if (snake.dx === 0) {
		snake.dx = -grid;
		snake.dy = 0;
	  }
  }
// start the game
requestAnimationFrame(loop);

</script>
<br>
<div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick ="up()" >U</button><br><br><button onclick="left()" >L</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "right()">R</button><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button onclick = "down()">D</button>
<br>
<br>
<p id="diff" style="visibility:hidden;font-size:1px" name="diff"></p>
<button onclick="location.href = '{{url('/exercises')}}'" style="height:50px;width:80px;background-color: #ffffff;font-size:15px;color:black;border:1px solid black" id="st" >Go back</button>
</div>
</body>
</html>