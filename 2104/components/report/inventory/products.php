<?php
include("../crud/report/inventory/products.php");
?>


<head>
  <script type="text/javascript">
    // google.charts.load('current', {'packages': ['bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
      var data = new google.visualization.arrayToDataTable([
        ['Trade Name', 'In Stock'],
        <?php
        if (mysqli_num_rows($exec) > 0) {
          while ($row = mysqli_fetch_array($exec)) {
            echo "['" . $row['tradeName'] . "'," . $row['inStock'] . "],";
          }
        }
        ?>
      ]);



      var options = {
        title: 'Products in Stock',
        width: 1435,
        legend: {
          position: 'none'
        },
        chart: {
          title: 'Products in Stock ',
          subtitle: 'Present quantity of each products in stock'
        },
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: {
              side: 'top',
              label: 'Quantity'
            } // Top x-axis.
          }
        },
        bar: {
          groupWidth: "90%"
        }
      };

      var chart = new google.charts.Bar(document.getElementById('top_x_div_products'));
      chart.draw(data, options);
    };
  </script>
</head>

<body>
  <div id="top_x_div_products" class="white-box-container round-edge long-chart"></div>
  
</body>
