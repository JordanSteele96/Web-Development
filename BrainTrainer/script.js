let boxContainer = document.getElementById("boxContainer");
let score = document.querySelector(".userScore");
let colors = ["red", "orange", "green", "purple", "blue"];
let colorArray = []; //Array that stores colors in random order
let colorToPick; // this is the color the user must guess within the grid
let numberOfSquares = 9;
let userGuessArray = [];
let usersScore = 0;

function createGridItems() {
  //creates the grid
  for (let i = 0; i < numberOfSquares; i++) {
    let div = document.createElement("div");
    div.classList.add("box");
    div.id = "box" + i;
    div.onclick = function changeColor() { };
    boxContainer.appendChild(div);
  }
}
createGridItems();

function randomColor() {

  //takes color from "colors" and puts them into new array
  for (let i = 0; i < numberOfSquares; i++) {
    colorArray.push(colors[Math.floor(Math.random() * colors.length)]);
  }
}

function hideColors() {
  // This hides the colors and picks a color the the user to use

  for (let i = 0; i < numberOfSquares; i++) {
    document.getElementById("box" + i).style.backgroundColor = "darkslategrey";
    colorToPick = colorArray[Math.floor(Math.random() * numberOfSquares)];
    document.getElementById("idColor").style.backgroundColor = colorToPick;
  }
}

document.querySelectorAll(".box").forEach((item) => {
  // Allows user to change the color of the boxes
  item.addEventListener("click", (event) => {
    if (item.style.backgroundColor !== colorToPick) {
      item.style.backgroundColor = colorToPick;
    } else {
      item.style.backgroundColor = "darkslategrey";
    }
  });
});

function startGame() {
  colorArray = [];
  userGuessArray = [];
  // starts the game 1.makes array -> disables start btn-> loops over colorsArray and colors the tiles
  randomColor();
  document.getElementById("startBtn").disabled = true;
  document.getElementById("submitBtn").disabled = false;
  for (let i = 0; i < numberOfSquares; i++) {
    document.getElementById("box" + i).style.backgroundColor = colorArray[i];
  }
  //userGuessArray = [];
  setTimeout(hideColors, 4000);
}

function createUsersArray() {
  for (let i = 0; i < numberOfSquares; i++) {
    if (document.getElementById("box" + i).style.backgroundColor !== "darkslategrey") { // if the box doesnt equal darkslategrey
      userGuessArray.push(document.getElementById("box" + i).style.backgroundColor); // adds the color of the box to the array

    } else {
      userGuessArray.push(undefined); //if the color is darkgrey use undefined 
    }
  }
}

tempScore = 0;
function compareArray() {
  let tempScore = 0;
  let numberOfSameColor = 0;
  for (let i = 0; i < colorArray.length; i++) {
    if (colorArray[i] === colorToPick) { // how many colorToPick in colorArray
      numberOfSameColor++;
    }
    if (userGuessArray[i] === colorToPick && colorArray[i] === colorToPick) { // How many same colors 
      tempScore++;
    }
  }
  if (tempScore === numberOfSameColor) { // if they are equal then the user got the right answer
    console.log("You Got the right answer")
    //What to do if the user got the right answer
    usersScore++;
    score.innerHTML = "Score:" + usersScore;
  } else {
    usersScore = 0;
    score.innerHTML = "Score: " + usersScore;
    //What to do if the user got the wrong answer
    console.log("Wrong")
  }

}

function submit() {
  document.getElementById("idColor").style.backgroundColor = "darkslategrey";
  document.getElementById("submitBtn").disabled = true;
  createUsersArray();
  compareArray();
  startGame();
}
