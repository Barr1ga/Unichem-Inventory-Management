<?php
include('../crud/db_connect.php');

$query = "SELECT orderStatus, COUNT(*) AS Quantity FROM `orders` GROUP BY orderStatus";

$exec = mysqli_query($conn, $query);


?>


<html>

<head>

    <!-- ratio of order statuses on orders (pie chart)  -->

    <script type="text/javascript">
        // Load Charts and the corechart and barchart packages.
        //   google.charts.load('current', {'packages':['corechart']});

        // Draw the pie chart and bar chart when Charts is loaded.
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'OrderStatus');
            data.addColumn('number', 'Quantity');
            data.addRows([
                <?php
                if (mysqli_num_rows($exec) > 0) {
                    while ($row = mysqli_fetch_array($exec)) {
                        echo "['" . $row['orderStatus'] . "'," . $row['Quantity'] . "],";
                    }
                }
                ?>

            ]);

            var piechart_options = {
                title: 'Orders: Composition of Order Status',
                width: 695,
                height: 400
            };
            var piechart = new google.visualization.PieChart(document.getElementById('piechart_div_ratio_order'));
            piechart.draw(data, piechart_options);

            var barchart_options = {
                title: 'Orders: Composition of Order Status',
                width: 695,
                height: 400,
                legend: 'none'
            };
            var barchart = new google.visualization.BarChart(document.getElementById('barchart_div_ratio_order'));
            barchart.draw(data, barchart_options);
        }
    </script>
</head>