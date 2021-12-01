<?php
    include('../db_connect.php');
    /* For testing only */
    // print($_GET['ID']);
    // print($_GET['status']);

    if (isset($_GET['ID']) && isset($_GET['status'])) {
        $orderID = $_GET['ID'];

        if ($_GET['status'] == "To-Approve" ) {
            $sql = "UPDATE orders
                        SET orderStatus = 'To-Confirm'
                        WHERE orderID = '$orderID' ";
    
            if (mysqli_query($conn, $sql)) {
                echo ' Order is approved';
            } else {
                echo 'Error: '. mysqli_error($conn);
            }
        }

        if ($_GET['status'] == "To-Confirm" ) {
            $sql = "UPDATE orders
                        SET orderStatus = 'To-Receive'
                        WHERE orderID = '$orderID' ";
    
            if (mysqli_query($conn, $sql)) {
                echo 'Order is confirmed';
            } else {
                echo 'Error: '. mysqli_error($conn);
            }
        }

        if ($_GET['status'] == "To-Receive" ) {
            $sql = "UPDATE orders
                        SET orderStatus = 'Completed'
                        WHERE orderID = '$orderID' ";
    
            if (mysqli_query($conn, $sql)) {
                echo 'Order is completed';
            } else {
                echo 'Error: '. mysqli_error($conn);
            }
        }

        header('location: ../../sections/orders.php');
    }
?>