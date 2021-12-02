<?php
    // print($_GET['id']);
    include('../db_connect.php');
    $orderID = $_GET['id'];
    $approvedBy = $_SESSION['userID'];

    $sql = "UPDATE orders
                SET orderStatus = 'Awaiting-Payment', approvedBy = '$approvedBy'
            WHERE orderID = '$orderID'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Order is Approved";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header('location: ../../sections/orders.php');
?>