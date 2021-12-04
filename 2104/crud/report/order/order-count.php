<?php
    include('../../crud/db_connect.php');

    $query = "SELECT MONTH(o.orderDate) AS month, YEAR(o.orderDate) AS year, COUNT(*) AS orderCount
                FROM orders o
                GROUP BY MONTH(o.orderDate), YEAR(o.orderDate) 
                ORDER BY o.orderDate ASC
                LIMIT 24";

    $result = mysqli_query($conn, $query);

    
           
          
          
?>