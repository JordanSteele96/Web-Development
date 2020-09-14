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
  colorArray = [];
  //takes color from "colors" and puts them into new array
  for (let i = 0; i < numberOfSquares; i++) {
    colorArray.push(colors[Math.floor(Math.random() * 5)]);
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

  // starts the game 1.makes array -> disables start btn-> loops over colorsArray and colors the tiles
  randomColor();
  document.getElementById("startBtn").disabled = true;
  document.getElementById("submitBtn").disabled = false;
  for (let i = 0; i < numberOfSquares; i++) {
    document.getElementById("box" + i).style.backgroundColor = colorArray[i];
  }
  userGuessArray = [];
  setTimeout(hideColors, 2000);
}

function createUsersArray() {
  for (let i = 0; i < numberOfSquares; i++) {
    if (document.getElementById("box" + i).style.backgroundColor == "darkslategrey") {
      userGuessArray.push(colorArray[i])
    } else {
      userGuessArray.push(document.getElementById("box" + i).style.backgroundColor);
    }
  }

}

function compareArray() {
  if (JSON.stringify(userGuessArray) === JSON.stringify(colorArray)) {
    usersScore++
    score.innerHTML = "Score:" + usersScore;
  } else {
    usersScore = 0;
    console.log("gameover")

  }
}

function submit() {
  document.getElementById("idColor").style.backgroundColor = "darkslategrey";
  document.getElementById("submitBtn").disabled = true;
  createUsersArray()
  compareArray();
  startGame();
}



