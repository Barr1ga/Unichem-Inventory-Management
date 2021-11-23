<?php

include('../crud/db_connect.php');

if(!isset($_GET['orderID'])){

    $getOrderList = "SELECT * FROM orders o
                    WHERE o.orderStatus = 'To-Approve'
                    LIMIT 1";

    $result = mysqli_query($conn, $getOrderList);
       
    $defaultproduct = mysqli_fetch_assoc($result);
            

    $_GET['orderID'] = $defaultproduct['orderID'];
}