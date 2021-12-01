<?php

include('../crud/db_connect.php');

if(!isset($_GET['repID'])){

    $getRepList = "SELECT * FROM replenishment r
                    WHERE r.orderStatus = 'To-Approve'
                    LIMIT 1";

    $result = mysqli_query($conn, $getRepList);
       
    $defaultRep = mysqli_fetch_assoc($result);
            
    $_GET['repID'] = $defaultRep['repOrderID'];
}