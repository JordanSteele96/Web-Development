var dateMonthly = [];
var monthlyDataGMSL = [];

var dateYearly = [];
var yearlyDataGMSL = [];

async function createCharts() {
  await setup();
  var ctx = document.getElementById("canvas").getContext("2d");
  myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: dateMonthly,
      datasets: [
        {
          label: "GMSL",
          data: monthlyDataGMSL,
          backgroundColor: "rgba(112, 177, 255, 0.3)",
          borderColor: "rgba(73, 163, 255, 1)",
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: "Measurement (mm)",
            },
          },
        ],
      },
    },
  });
}

async function getMonthlyData() {
  const response = await fetch("data/test2.csv");
  const data = await response.text();

  const table = data.split("\n");

  table.forEach((elt) => {
    const columns = elt.split(",");
    const Time = columns[0];
    dateMonthly.push(Time);
    const monthlyData = columns[1];
    monthlyDataGMSL.push(monthlyData);
  });
}

async function getYearlyData() {
  const response = await fetch("data/test3.csv");
  const data = await response.text();

  const table = data.split("\n");

  table.forEach((elt) => {
    const columns = elt.split(",");
    const Time = columns[0];
    dateYearly.push(Time);
    const monthlyData = columns[1];
    yearlyDataGMSL.push(monthlyData);
  });
}

async function changeDataToMonthly() {
  myChart.data.datasets[0].data = monthlyDataGMSL;
  myChart.data.labels = dateMonthly;
  myChart.update();
}

async function changeDataToYearly() {
  myChart.data.datasets[0].data = yearlyDataGMSL;
  myChart.data.labels = dateYearly;
  myChart.update();
}

async function setup() {
  await getYearlyData();
  await getMonthlyData();
}
createCharts();
