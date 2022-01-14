<?php

    include('../crud/db_connect.php');

    $id = $order['orderID'];

    $sql = "SELECT *
            FROM
                orders o
            JOIN order_line ol ON
                ol.orderID = o.orderID
            JOIN product p ON
                p.productID = ol.productID
            WHERE o.orderID = (?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        while ($orders = $result->fetch_assoc()) {
            include('../components/order/get-orders.php');
        } 
    }

?>