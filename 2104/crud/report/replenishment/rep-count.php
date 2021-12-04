
<?php
    include('../../crud/db_connect.php');

    $query = "SELECT MONTH(repOrderDate) AS month, YEAR(repOrderDate) AS year, COUNT(*) AS repCount
                FROM replenishment
                GROUP BY MONTH(repOrderDate), YEAR(repOrderDate) 
                ORDER BY repOrderDate ASC
                LIMIT 24";

    $result = mysqli_query($conn, $query);

    
           
          
          
?>