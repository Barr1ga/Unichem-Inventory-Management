<?php
  include("../crud/report/general/rep-prod-count.php");
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
                echo "['".$row['month']. '-' .$row['year']."', ".$row['quantity']."], ";
            }
          
          ?>
        ]);

        var options = {
          title: 'Count of Products Replenished (Month-Year) ',
          width: 1195,
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_twotwo'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_twotwo" class="white-box-container round-edge graph-long"></div>
  </body>
</html>