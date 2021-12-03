<?php
  include("../crud/report/replenishment/rep-count.php");
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
                echo "['".$row['month']. '-' .$row['year']."', ".$row['repCount']."], ";
            }
          
          ?>
        ]);

        var options = {
          title: ' Count of Replenishments (Month-Year)',
          width: 1495,
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_wew'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_wew" class="white-box-container round-edge graph-long"></div>
  </body>
</html>