<?php
  include("../crud/report/order/order-cost.php");
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
          title: 'Cost of Orders graph (Month-Year)',
          width: 1450,
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart_one'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart_one" class="white-box-container round-edge graph-long"></div>
  </body>
</html>