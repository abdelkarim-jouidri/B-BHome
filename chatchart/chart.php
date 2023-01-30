<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

      <title> charts JS </title>
</head>

<body>
      <canvas id="bar-chart" width="800" height="450"></canvas>
      <canvas id="pie-chart" width="800" height="450"></canvas>
      <script>
            new Chart(document.getElementById("bar-chart"), {
                  type: 'bar',
                  data: {
                        labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                        datasets: [{
                              label: "Population (millions)",
                              backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                              data: [2478, 5267, 734, 784, 433]
                        }]
                  },
                  options: {
                        legend: {
                              display: false
                        },
                        title: {
                              display: true,
                              text: 'Predicted world population (millions) in 2050'
                        }
                  }
            });
      </script>
      <script>
            new Chart(document.getElementById("pie-chart"), {
                  type: 'pie',
                  data: {
                        labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                        datasets: [{
                              label: "Population (millions)",
                              backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                              data: [2478, 5267, 734, 784, 433]
                        }]
                  },
                  options: {
                        title: {
                              display: true,
                              text: 'Predicted world population (millions) in 2050'
                        }
                  }
            });
      </script>

</body>

</html>