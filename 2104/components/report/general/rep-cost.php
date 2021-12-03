<?php
  include("../crud/report/general/rep-cost.php");
?>



<html>
  <head>
    
    <script type="text/javascript">
      
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Replenishment'],
          <?php
            while($row = mysqli_fetch_array($result)){
                echo "['".$row['month']. '-' .$row['year']."', ".$row['totalPrice']."], ";
            }
          
          ?>
        ]);

        var options = {
          title: 'total cost of replenishments graph (by month)',
          width: 1495,
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_gwapo'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_gwapo" style="width: 1495px; height: 422px"></div>
  </body>
</html>