<?php 
    include('../crud/db_connect.php');
    
    $getRepList = "SELECT *, SUM(rl.quantity * p.price) as 'Total'
                    FROM
                    replenishment r
                    JOIN supplier s ON
                        r.supplierID = s.supplierID
                    JOIN inventory_users iu ON
                        r.createdBy = iu.userID
                    JOIN replenishment_line rl ON
                        rl.repOrderID = r.repOrderID
                    JOIN product p ON
                        rl.productID = p.productID
                    WHERE
                        r.orderStatus = 'Completed'
                    GROUP BY r.repOrderID";

    $result = mysqli_query($conn, $getRepList);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
            <div class=''>
            <div class='scroll-list'>
            ";
        while ($rep = mysqli_fetch_assoc($result)) {
            include('../components/replenishment/rep-list.php');
        } 
        echo "
        </div>
        </div>
    ";
    }else{
        echo "<div class ='empty-message'>There are no Completed Replenishments.</div>";
    }

?>













