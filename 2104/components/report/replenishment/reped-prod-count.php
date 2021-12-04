<?php
include("../../crud/report/replenishment/reped-prod-count.php");
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
          echo "['" . $row['month'] . '-' . $row['year'] . "', " . $row['quantity'] . "], ";
        }

        ?>
      ]);

      var options = {
        legend: {
          position: 'right'
        },
        
        enableInteractivity: true,
        fontSize: 13,
        chartArea: {
          left: 88,
          top: 20,
          width: '87%',
          height: 400,
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart_twotwo'));

      chart.draw(data, options);
    }
  </script>
</head>

<body>
  <br>
  <h6>Count of products ordered</h6>
  <p>Total count of all products ordered</p>
  <div id="curve_chart_twotwo" class="white-box-container round-edge long-chart"></div>
</body>
<br>

</html>