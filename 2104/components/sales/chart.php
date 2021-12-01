<?php
include('../crud/chart_db_connect.php');
?>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
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
    <div id="columnchart_material" style="width: 1343.57px; 
                                            height: 422px;
                                            background-color: white;
                                            padding: 15px 15px 15px 15px;
                                            border: 1px solid #D5DBE4;
                                            border-radius: 7px 7px 7px 7px;"></div>
  </body>
</html>