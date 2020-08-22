var input = document.querySelector("#searhBox");
var iconElement = document.querySelector(".weather-icon");
var main = document.querySelector(".location");
var temp = document.querySelector(".temperature-value");
var clouds = document.querySelector(".clouds");
var humidity = document.querySelector(".humidity-description");
var search = document.querySelector("#submitButton");
var windDirection = document.querySelector(".wind-direction");
var windSpeed = document.querySelector(".wind-speed");
var sunrise = document.querySelector(".sunrise");
var sunset = document.querySelector(".sunset");

var cloud = document.querySelector(".cloud-percentage");
var visability = document.querySelector(".visability");

if ("geolocation" in navigator) {
  navigator.geolocation.getCurrentPosition(setPosition, showError);
} else {
  notificationElement.style.display = "block";
  notificationElement.innerHTML = "<p>Browser doesn't Support Geolocation</p>";
}

function convertTime(unixTime) {
  let dt = new Date(unixTime * 1000);
  let h = dt.getHours();
  let m = "0" + dt.getMinutes();
  let t = h + ":" + m.substr(-2);
  return t;
}

function setPosition(position) {
  let latitude = position.coords.latitude;
  let longitude = position.coords.longitude;
  getWeather(latitude, longitude);
}

function showError(error) {
  notificationElement.style.display = "block";
  notificationElement.innerHTML = `<p> ${error.message} </p>`;
}
function getWeather(latitude, longitude) {
  fetch(
    `http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=00a7d9225856a588d48e585ff3a46237`
  )
    .then((response) => response.json())
    .then((data) => {
      var tempValue = Math.floor(data.main.temp - 273) + "°C";
      var nameValue = data.name;
      var tempIconElement = data.weather[0].icon;
      var tempWindDirection = data.wind.deg;
      var tempWindSpeed = data.wind.speed;
      var tempsunrise = data.sys.sunrise;
      var tempsunset = data.sys.sunset;
      var tempHumidity = data.main.humidity;
      var tempCloud = data.clouds.value;
      var tempVisability = data.visibility.value;

      main.innerHTML = nameValue;
      temp.innerHTML = "Temp - " + tempValue;
      humidity.innerHTML = tempHumidity + "%";
      iconElement.innerHTML = `<img src="icons/${tempIconElement}.png"/>`;
      windDirection.innerHTML = "Wind Direction: " + tempWindDirection + "°";
      windSpeed.innerHTML = "Wind Speed: " + tempWindSpeed;
      sunrise.innerHTML = "Sunrise: " + convertTime(tempsunrise) + "am";
      sunset.innerHTML = "Sunset: " + convertTime(tempsunset) + "pm";
      cloud.innerHTML = "Clouds: " + tempCloud;
      visability.innerHTML = "Visability: " + tempVisability;

      input.value = "";
    })
    .catch((err) => alert("Wrong city name!"));
}

search.addEventListener("click", function (name) {
  fetch(
    "https://api.openweathermap.org/data/2.5/weather?q=" +
      input.value +
      "&appid=00a7d9225856a588d48e585ff3a46237"
  )
    //fetch('api.openweathermap.org/data/2.5/forecast?q='+input.value+'&appid=00a7d9225856a588d48e585ff3a46237') potential 5 day forecast
    .then((response) => response.json())
    .then((data) => {
      var tempValue = Math.floor(data.main.temp - 273) + "°C";
      var nameValue = data.name;

      var tempIconElement = data.weather[0].icon;
      var tempWindDirection = data.wind.deg;
      var tempWindSpeed = data.wind.speed;
      var tempsunrise = data.sys.sunrise;
      var tempsunset = data.sys.sunset;

      var tempHumidity = data.main.humidity;
      var tempCloud = data.clouds.value;
      var tempVisability = data.visibility.value;

      main.innerHTML = nameValue;
      temp.innerHTML = "Temp - " + tempValue;
      humidity.innerHTML = tempHumidity + "%";
      iconElement.innerHTML = `<img src="icons/${tempIconElement}.png"/>`;
      windDirection.innerHTML = "Wind Direction: " + tempWindDirection + "°";
      windSpeed.innerHTML = "Wind Speed: " + tempWindSpeed;
      sunrise.innerHTML = "Sunrise: " + convertTime(tempsunrise) + "am";
      sunset.innerHTML = "Sunset: " + convertTime(tempsunset) + "pm";
      cloud.innerHTML = "Clouds: " + tempCloud;
      visability.innerHTML = "Visability: " + tempVisability;

      input.value = "";
    })
    .catch((err) => alert("Wrong city name!"));
});
