<?php 
    include('../crud/db_connect.php');

    $orderID = $_GET['orderID'];
    
    $getOrderInformation = "SELECT *
                                FROM orders o
                                JOIN order_line ol ON ol.orderID = o.orderID
                                JOIN product p ON ol.productID = p.productID
                                WHERE ol.orderID = $orderID";

    $result = mysqli_query($conn, $getOrderInformation);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='scroll-list-2'>";
        while ($order = mysqli_fetch_assoc($result)) {
            
            // $createdByID = $order['createdBy'];
            // $approvedByID = $order['approvedBy'];

            // $createdByquery = "SELECT * 
            //             FROM inventory_users
            //             WHERE userID=$createdByID LIMIT 1";

            // $approvedByquery = "SELECT * 
            //             FROM inventory_users
            //             WHERE userID=$approvedByID LIMIT 1";

            // $createdByResult = mysqli_query($conn, $createdByquery);
            // $approvedByResult = mysqli_query($conn, $approvedByquery);

            // $CreatedBy = mysqli_fetch_assoc($createdByResult);
            // $ApprovedBy = mysqli_fetch_assoc($approvedByResult);
            
            include('../components/order/order-information.php');

        }  
        echo "</div>";
        
    }


   
    

    
?>













