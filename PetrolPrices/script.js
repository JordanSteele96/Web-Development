const yearArr = [];
const priceArr = [];

async function createCharts() {
  await getData();
  var ctx = document.getElementById("canvas").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: yearArr,
      datasets: [
        {
          label: "Price",
          data: priceArr,
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
    yearArr.push(date);
    const price = columns[1];
    priceArr.push(price);
  });
}
createCharts();
