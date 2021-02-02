var moneySlider = document.getElementById('borrowslider');
var moneyTextField = document.getElementById("inputamount");
var numberOfYearsSlider = document.getElementById("yearsslider");
var yearTextField = document.getElementById("nyears");
var yearsText = document.querySelector(".numberofyears");
var yearsToMonths = document.getElementById("calculation-months");
var totalCostText = document.getElementById("totalCost");
var totalCostRepay = document.getElementById("totalRepay");
var totalMonthly = document.getElementById("totalAmount");

var brandsWorkWith = document.querySelector(".workedwithlogos");


var repayNoFormat;
var numberOfMonths;

var formatter = new Intl.NumberFormat('en-GB', {
    style: 'currency',
    currency: 'GBP',
  });
  
moneySlider.oninput = function(){
    var currency = moneySlider.value;

    moneyTextField.value = formatter.format(currency);
    totalCostText.innerHTML = formatter.format(currency);

    calcRepayment(numberOfYearsSlider.value, moneySlider.value);
    calcmonthlyRepayment(repayNoFormat, 12);
}
numberOfYearsSlider.oninput = function(){
    var sliderValue = numberOfYearsSlider.value;
    numberOfMonths = sliderValue * 12;
    yearTextField.innerHTML = sliderValue;
    yearsToMonths.innerHTML = sliderValue * 12 + " monthly";

    if(sliderValue == 1){
        yearsText.textContent = "year";
    }else{
        yearsText.textContent = "years";
    }
    calcRepayment(numberOfYearsSlider.value, moneySlider.value);
    calcmonthlyRepayment(repayNoFormat, 12);



}

function calcRepayment(year,borrow){
    var numberOfYears = year + 4; 
    repayAmount = formatter.format(numberOfYears * borrow);
    repayNoFormat = numberOfYears * borrow
    totalCostRepay.innerHTML =  repayAmount;
}

function calcmonthlyRepayment(repayAmount, months){
    totalMonthly.innerHTML = formatter.format(repayAmount / months);

}

var buttonPressed = false;
function scrollFunction() {
    //makes popup window appear 1400px from the top of the screen
    if (
      document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400 && buttonPressed == false) {
      document.querySelector(".popupwindow-container").style.display = "flex";
    }
}
function closePopUp(){
    //currently closes the pop up window. 
    document.querySelector(".popupwindow-container").style.display = "none";
    buttonPressed = true;
}


  window.onscroll = function () {
    scrollFunction();

  }
