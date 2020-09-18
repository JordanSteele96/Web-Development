const burger = document.querySelector(".burger-menu");
const nav = document.querySelector(".nav-links");
const closebtn = document.querySelector("#close");

const navSlide = () => {
  burger.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
  });
};

const navSlide2 = () => {
  closebtn.addEventListener("click", () => {
    nav.classList.toggle("nav-active");
  });
};

navSlide();
navSlide2();

let resizeTimer;
window.addEventListener("resize", () => {
  document.body.classList.add("resize-animation-stopper");
  clearTimeout(resizeTimer);
  resizeTimer = setTimeout(() => {
    document.body.classList.remove("resize-animation-stopper");
  }, 400);
});
