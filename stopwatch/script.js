let text = document.getElementById("timer");
let startbtn = document.getElementById("start");
let pausebtn = document.getElementById("pause");
let stopbtn = document.getElementById("restart");

let seconds = 0; //counts
let minutes = 0;
let hours = 0;

let isPaused = false;

setInterval(() => {
  if (!isPaused) {
    text.innerHTML =
      (hours < 10 ? "0" + hours : hours) +
      ":" +
      (minutes < 10 ? "0" + minutes : minutes) +
      ":" +
      (seconds < 10 ? "0" + seconds : seconds);
    secondsToMinutes();
    minutesToHours();
    seconds++;
  }
}, 1000);

function secondsToMinutes() {
  if (seconds == 60) {
    seconds = 0;
    minutes++;
  }
}
function minutesToHours() {
  if (minutes == 60) {
    minutes = 0;
    hours++;
  }
}

function restart() {
  seconds = 0;
  hours = 0;
  minutes = 0;
  isPaused = false;
}

function pause() {
  isPaused = true;
}

function start() {
  isPaused = false;
}
