<?php
  include("../crud/report/general/order-cost.php");
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
                echo "['".$row['month']. '-' .$row['year']."', ".$row['totalPrice']."], ";
            }
          
          ?>
        ]);

        var options = {
          title: 'total cost of Orders graph (by month-year)',
          width: 1495,
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_one'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_one" style="width: 1495px; height: 422px"></div>
  </body>
</html>