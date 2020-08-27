const weekArr = [];
const WeeklyPrices = [];
const monthlyPrices = [];
const monthArr = [];
let myChart;

async function createCharts() {
  await setup();
  var ctx = document.getElementById("canvas").getContext("2d");
  myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: weekArr,
      datasets: [
        {
          label: "Price",
          data: WeeklyPrices,
          backgroundColor: ["rgba(255, 99, 132, 0.2)"],
          borderColor: ["rgba(255, 99, 132, 1)"],
          borderWidth: 1,
        },
      ],
    },
    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
}

async function getData() {
  const response = await fetch("data/test.csv");
  const data = await response.text();

  const table = data.split("\n").slice(3);

  table.forEach((elt) => {
    const columns = elt.split(",");
    const date = columns[0];
    weekArr.push(date);
    const price = columns[1];
    WeeklyPrices.push(price);
  });
}

//This function averages the prices for each month (monthlyPrices)
async function addingUp() {
  await getData();
  let sum = 0;
  for (let counter = 1; counter <= WeeklyPrices.length; counter++) {
    sum += parseFloat(WeeklyPrices[counter - 1]);

    if (counter % 4 == 0 && !counter == 0) {
      monthlyPrices.push(sum.toFixed(2) / 4);
      sum = 0;
    }
  }
}

// This function sets the X axis for monthly prices (monthArr)
function arrMonths() {
  var months = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  var year = 0;
  for (let i = 0; i < 224; i++) {
    if (i % 12 == 0) {
      year++;
    }
    monthArr.push(months[i % months.length] + ` Year(${year})`);
  }
}

function changeDataToWeekly() {
  myChart.data.datasets[0].data = WeeklyPrices;
  myChart.data.labels = weekArr;
  myChart.update();
}

function changeDataToMonthly() {
  myChart.data.datasets[0].data = monthlyPrices;
  myChart.data.labels = monthArr;
  myChart.update();
}

async function setup() {
  await addingUp();
}

arrMonths();
createCharts();
