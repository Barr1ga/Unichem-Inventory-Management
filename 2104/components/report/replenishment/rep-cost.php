<?php
include("../../crud/report/replenishment/rep-cost.php");
?>



<html>

<head>

  <script type="text/javascript">
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Date', 'Replenishment'],
        <?php
        while ($row = mysqli_fetch_array($result)) {
          echo "['" . $row['month'] . '-' . $row['year'] . "', " . $row['totalPrice'] . "], ";
        }

        ?>
      ]);

      var options = {
        legend: {
          position: 'right'
        },
        curveType: 'function',
        curveType: 'function',
        enableInteractivity: true,
        fontSize: 13,
        chartArea: {
          left: 88,
          top: 20,
          width: '87%',
          height: 400,
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart_gwapo'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <br>
  <h6>Cost of Orders</h6>
  <p>Total cost of all orders completed</p>
  <div id="curve_chart_gwapo" class="white-box-container round-edge long-chart"></div>
</body>
<br>

</html>