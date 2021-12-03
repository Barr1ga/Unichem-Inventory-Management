<?php
  include("../crud/report/general/ordered-prod-count.php");
?>


<html>
  <head>
    
    <script type="text/javascript">
      
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Orders'],
          <?php
            while($row = mysqli_fetch_array($result)){
                echo "['".$row['month']. '-' .$row['year']."', ".$row['quantity']."], ";
            }
          
          ?>
        ]);

        var options = {
          title: 'Count of Products Ordered (Month-Year) ',
          width: 1495,
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_two'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_two" style="width: 1495px; height: 422px"></div>
  </body>
</html>