<?php

include('../crud/db_connect.php');

if(!isset($_GET['repID'])){

    $getRepList = "SELECT * FROM replenishment r
                    WHERE r.orderStatus = 'Awaiting-Approval'
                    LIMIT 1";

    if ($result = mysqli_query($conn, $getRepList)) {
        if ($defaultRep = mysqli_fetch_assoc($result)) {
            $_GET['repID'] = $defaultRep['repOrderID'];
        }
    }
    
}