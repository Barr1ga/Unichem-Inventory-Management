<?php
    include('../db_connect.php');
    /* For testing only */
    // print($_GET['ID']);
    // print($_GET['status']);

    if (isset($_GET['ID']) && isset($_GET['status'])) {
        $repOrderID = $_GET['ID'];

        if ($_GET['status'] == "To-Approve" ) {
            $sql = "UPDATE replenishment
                        SET orderStatus = 'To-Confirm'
                        WHERE repOrderID = '$repOrderID' ";
    
            if (mysqli_query($conn, $sql)) {
                echo 'Replenishment Order is approved';
            } else {
                echo 'Error: '. mysqli_error($conn);
            }
        }

        if ($_GET['status'] == "To-Confirm" ) {
            $sql = "UPDATE replenishment
                        SET orderStatus = 'To-Receive'
                        WHERE repOrderID = '$repOrderID' ";
    
            if (mysqli_query($conn, $sql)) {
                echo 'Replenishment Order is confirmed';
            } else {
                echo 'Error: '. mysqli_error($conn);
            }
        }

        if ($_GET['status'] == "To-Receive" ) {
            $sql = "UPDATE replenishment
                        SET orderStatus = 'Completed'
                        WHERE repOrderID = '$repOrderID' ";
    
            if (mysqli_query($conn, $sql)) {
                echo 'Replenishment Order is completed';
            } else {
                echo 'Error: '. mysqli_error($conn);
            }
        }

        header('location: ../../sections/replenishments.php');
    }
?>