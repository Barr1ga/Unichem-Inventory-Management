<?php
  include("../crud/report/general/order-count.php");
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
                echo "['".$row['month']. '-' .$row['year']."', ".$row['orderCount']."], ";
            }
          
          ?>
        ]);

        var options = {
          title: ' Count of Orders (Month-Year)',
          width: 1495,
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_three'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_three" style="width: 1495px; height: 422px"></div>
  </body>
</html>