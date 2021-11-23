<?php 
    include('../crud/db_connect.php');
    
    $getOrderList = "SELECT *
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
                        r.orderStatus = 'To-Confirm'";

    $result = mysqli_query($conn, $getOrderList);
    
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
        echo "<br>There are no order in the database";
    }

?>













