<?php 
    include('../crud/db_connect.php');

    $orderID = $Order['orderID'];

    $getCustomerOrderLine = "SELECT * FROM order_line ol, product p 
                            WHERE orderID=$orderID
                            AND ol.productID=p.productID";

    

    $result = mysqli_query($conn, $getCustomerOrderLine);
    $totalPrice=0;
    while ($OrderLine = mysqli_fetch_assoc($result)) {
            
        include('../components/customer/customer-orderline.php');
        $totalPrice += $totalEach;
    }
  


