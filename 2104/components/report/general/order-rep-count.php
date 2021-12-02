<?php
  include("../crud/report/general/order-rep-count.php");
?>

<html>
  <head>
    <script type="text/javascript">
      // google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Orders & Replenishment', 'Replenishment', 'Order'],
          <?php
                if(mysqli_num_rows($result)> 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "['".$row['repOrderDate'].'||'.$row['orderDate'].
                                 "', 
                                '".$row['repOrderCount'].
                                "', 
                                '".$row['orderCount']."'
                                ],";
                        }
                    }
                ?>
        ]);

        var options = {
          chart: {
            title: 'Order | Replenishment Summary'
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="columnchart_material" class="white-box-container round-edge" style="width: 1495px; height: 422px;"></div>
  </body>
</html>