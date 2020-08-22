

let canvas = document.getElementById("canvas") // gets the element from html
let context = canvas.getContext("2d");

let circles =[];
let numberOfCircles = 5;
let circlesBeforeDeleting = 6;


function setup(){
  canvas.style.background = "#000000"; // change background colour of canvas
  /*for(let i = 0;i<numberOfCircles;i++){
  circles[i] = new Circle(Math.floor(Math.random() * 580) + 20, Math.floor(Math.random() * 580) + 20,Math.floor(Math.random() * 50)+20,randomColour());
  } Un-comment to randomly place the circles using for loop instead of clicking*/ 
  draw();
}

function randomColour(){
  var colours=["blue","yellow","purple","green","red","orange","white"];
  return colours[Math.floor(Math.random() * colours.length)]; 
}

  canvas.addEventListener('click', function(event) {  
  let b = new Circle(event.clientX,event.clientY,Math.floor(Math.random() * 50)+20,randomColour());
  circles.push(b);
  removeCircle()
  draw();
});


function removeCircle(){
  if(circles.length>circlesBeforeDeleting){
    context.clearRect(0,0,600,600);
    circles.splice(0,1)
  }
}


function draw(){
  for(let i = 0 ;i<circles.length;i++){
    circles[i].show();
    }
}

class Circle {
  constructor(x,y,r,colour){
    this.x= x;
    this.y = y;
    this.r = r;
    this.colour = colour;
  }
  show(){
    context.beginPath();
    context.arc(this.x, this.y, this.r, 0, 2 * Math.PI,false);
    context.fillStyle = this.colour;
    context.fill();
    context.stroke();
  }
}
 setup();
