<?php

include('../crud/db_connect.php');

if(!isset($_GET['orderID'])){

    $getOrderList = "SELECT * FROM orders o
                    WHERE o.orderStatus = 'Awaiting-Approval'
                    LIMIT 1";

    $stmt = $conn->prepare($getOrderList);
    $stmt->execute();

    if ($result = $stmt->get_result()) {
        if ($defaultOrder = $result->fetch_assoc()) {
            $_GET['orderID'] = $defaultOrder['orderID'];
        }
    }

    $stmt->close();
}

?>