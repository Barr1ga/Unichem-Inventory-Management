<?php

include('../crud/db_connect.php');

if(!isset($_GET['userID'])){

    $getEmployeeList = "SELECT * FROM inventory_users WHERE userType='User' LIMIT 1";

    $result = mysqli_query($conn, $getEmployeeList);
       
    if ($defaultEmployee = mysqli_fetch_assoc($result))
        $_GET['userID'] = $defaultEmployee['userID'];
}