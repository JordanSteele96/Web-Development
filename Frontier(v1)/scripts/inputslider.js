const sliderProps = {
    fill: " #e67943", //changes left
    background: "rgba(155, 255, 255, 0.214)",  //changes right
  };
  const amountToBorrow = document.querySelector(".amounttoborrow-slider");
  const amountOfYears = document.querySelector(".amountofyears-slider");

  amountToBorrow.querySelector("input").addEventListener("input", event => {
    applyFill(event.target);
  });
  amountOfYears.querySelector("input").addEventListener("input", event => {
    applyFill(event.target);
  });
  applyFill(slider.querySelector("input"));
  function applyFill(slider) {
    const percentage = (100 * (slider.value - slider.min)) / (slider.max - slider.min);
    const bg = `linear-gradient(90deg, ${sliderProps.fill} ${percentage}%, ${sliderProps.background} ${percentage +
        0.1}%)`;
    slider.style.background = bg;
  } 