console.log('works')
const burger = document.querySelector(".burger");
const nav = document.querySelector(".nav-links-container");
// const closebtn = document.querySelector("#close");

const navSlide = () => {
  // opens burger menu
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
    burger.classList.toggle('toggle');
  });

  //burger animation
  // burger.classList.toggle('toggle');

};

navSlide();



let resizeTimer; // stops the burger menu bar playing when resizing the page
window.addEventListener("resize", () => {
  document.body.classList.add("resize-animation-stopper");
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    document.body.classList.remove("resize-animation-stopper");
  }, 400);
});
