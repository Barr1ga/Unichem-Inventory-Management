<?php
    include('../../crud/db_connect.php');

    $query = "SELECT MONTH(r.repOrderDate) AS month, YEAR(r.repOrderDate) AS year, p.price * rl.quantity AS totalPrice 
                FROM replenishment r
                JOIN replenishment_line rl 
                ON r.repOrderID=rl.repOrderID 
                JOIN product p ON rl.productID=p.productID 
                WHERE r.orderStatus='Completed'
                GROUP BY MONTH(r.repOrderDate), YEAR(r.repOrderDate) 
                ORDER BY r.repOrderDate ASC";

    $result = mysqli_query($conn, $query);

    
           
          
          
?>