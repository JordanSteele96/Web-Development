var userChoice = document.getElementById("playersChoice");
var compChoice = document.getElementById("computerChoice");
var userScore = document.getElementById("uScore");
var compScore = document.getElementById("cScore");

var number = 0;
let userMove;
let array = ["rock", "paper", "scissor"];
let playerScore = 0;
let computerScore = 0;
let finalCompMove;
let finalUserMove;
let changeDifficulty = 1;

function decision(u) {
  if (u == 1) {
    userChoice.innerHTML = `<img src="images/${"rock"}.png"/>`;
    userMove = 0;
  } else {
  }
  if (u == 2) {
    userChoice.innerHTML = `<img src="images/${"paper"}.png"/>`;
    userMove = 1;
  }
  if (u == 3) {
    userChoice.innerHTML = `<img src="images/${"scissor"}.png"/>`;
    userMove = 2;
  }
}

function difficulty(u) {
  if (u == 1) {
    document.getElementById("btn-difficult-one").classList.add("active");
    changeDifficulty = 1;
  } else {
    document.getElementById("btn-difficult-one").classList.remove("active");
  }
  if (u == 2) {
    document.getElementById("btn-difficult-two").classList.add("active");
    changeDifficulty = 2;
  } else {
    document.getElementById("btn-difficult-two").classList.remove("active");
  }
}
function computerMove() {
  number = Math.floor(Math.random() * 3);
  finalCompMove = array[number];
}

function playerMove() {
  finalUserMove = array[userMove];
}

function computerCheats() {
  if (finalUserMove == "rock") {
    number = 1;
    finalCompMove = array[1];
  }
  if (finalUserMove == "paper") {
    number = 2;
    finalCompMove = array[2];
  }
  if (finalUserMove == "scissor") {
    number = 0;
    finalCompMove = array[0];
  }
}

function updateUI() {
  compChoice.innerHTML = `<img src="images/${array[number]}.png"/>`;
  userScore.innerHTML = "You:" + playerScore;
  compScore.innerHTML = "Computer:" + computerScore;
}

function whoWon() {
  if (
    (finalUserMove == "rock" && finalCompMove == "scissor") ||
    (finalUserMove == "paper" && finalCompMove == "rock") ||
    (finalUserMove == "scissor" && finalCompMove == "paper")
  ) {
    playerScore++;
  }
  if (
    (finalCompMove == "rock" && finalUserMove == "scissor") ||
    (finalCompMove == "paper" && finalUserMove == "rock") ||
    (finalCompMove == "scissor" && finalUserMove == "paper")
  ) {
    computerScore++;
  }
}

function readybutton() {
  if (changeDifficulty == 1) {
    computerMove();
  } else {
    computerCheats();
  }
  playerMove();
  whoWon();
  updateUI();
}
