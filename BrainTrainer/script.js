let boxContainer = document.getElementById("boxContainer");
let colors = ["red", "orange", "green", "purple", "blue"];
let colorArray = []; //Array that stores colors in random order
let colorToPick; // this is the color the user must guess within the grid
let numberOfSquares = 9;

function createGridItems() { //creates the grid 
  for (let i = 0; i < numberOfSquares; i++) {
    let div = document.createElement("div");
    div.classList.add("box");
    div.id = "box" + i;
    div.onclick = function changeColor() { };
    boxContainer.appendChild(div);
  }
}
createGridItems();
function randomColor() { //takes color from "colors" and puts them into new array
  for (let i = 0; i < numberOfSquares; i++) {
    colorArray.push(colors[Math.floor(Math.random() * 5)]);
  }
}

function hideColors() {   // This hides the colors and picks a color the the user to use
  for (let i = 0; i < numberOfSquares; i++) {
    document.getElementById("box" + i).style.backgroundColor = " #444";
    colorToPick = colorArray[i];
    document.getElementById("idColor").style.backgroundColor = colorToPick;
  }
}

document.querySelectorAll('.box').forEach(item => { // Allows user to change the color of the boxes
  item.addEventListener('click', event => {
    if (item.style.backgroundColor !== colorToPick) {
      item.style.backgroundColor = colorToPick;
    }
    else {
      item.style.backgroundColor = "#444";
    }

  })
})


function startGame() { // starts the game 1.makes array -> disables start btn-> loops over colorsArray and colors the tiles
  randomColor();
  document.getElementById("startBtn").disabled = true;
  for (let i = 0; i < numberOfSquares; i++) {
    document.getElementById("box" + i).style.backgroundColor = colorArray[i];

  }
  setTimeout(hideColors, 2000);
}


