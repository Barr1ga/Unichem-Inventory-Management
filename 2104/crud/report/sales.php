<?php
    include('../crud/db_connect.php');

    $query = "SELECT *
                FROM (SELECT COUNT(orderID) AS orderCount, orderDate FROM orders GROUP BY EXTRACT(year FROM orderDate) ORDER BY orderDate ASC)A
                CROSS JOIN (SELECT COUNT(repOrderID) AS repOrderCount, repOrderDate FROM replenishment GROUP BY EXTRACT(year FROM repOrderDate))B
                ORDER BY orderDate";

    $result = mysqli_query($conn, $query);
?>