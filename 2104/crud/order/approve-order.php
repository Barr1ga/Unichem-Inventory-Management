<?php
    // print($_GET['id']);
    include('../db_connect.php');
    $orderID = $_GET['id'];

    $sql = "UPDATE orders
                SET orderStatus = 'Awaiting-Payment'
            WHERE orderID = '$orderID'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Order is Approved";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header('location: ../../sections/orders.php');
?>