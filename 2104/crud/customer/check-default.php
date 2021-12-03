<?php

include('../crud/db_connect.php');

if(!isset($_GET['customerID'])){

    $getCustomerList = "SELECT * FROM customer LIMIT 1";

    if ($result = mysqli_query($conn, $getCustomerList)) {
        if ($defaultCustomer = mysqli_fetch_assoc($result)){
            $_GET['customerID'] = $defaultCustomer['customerID'];
        }
    }

}