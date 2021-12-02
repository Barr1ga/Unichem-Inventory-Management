<?php
    // print($_GET['id']);
    include('../db_connect.php');
    $repOrderID = $_GET['id'];
    $approvedBy = $_SESSION['userID'];

    $sql = "UPDATE replenishment
                SET orderStatus = 'Awaiting-Payment', approvedBy = '$approvedBy'
            WHERE repOrderID = '$repOrderID'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Order is Approved";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header('location: ../../sections/orders.php');
?>