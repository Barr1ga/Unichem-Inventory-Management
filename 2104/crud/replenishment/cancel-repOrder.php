<?php
    // print($_GET['id']);
    include('../db_connect.php');
    $repOrderID = $_GET['id'];

    $sql = "UPDATE replenishment
                SET orderStatus = 'Cancelled'
            WHERE repOrderID = '$repOrderID'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Order is Cancelled";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header('location: ../../sections/replenishments.php');
?>