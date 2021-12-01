<?php

include('../crud/db_connect.php');

if(!isset($_GET['orderID'])){

    $getOrderList = "SELECT * FROM orders o
                    WHERE o.orderStatus = 'Awaiting-Approval'
                    LIMIT 1";

    if ($result = mysqli_query($conn, $getOrderList)) {
        if ($defaultOrder = mysqli_fetch_assoc($result)) {
            $_GET['orderID'] = $defaultOrder['orderID'];
        }
    }
}