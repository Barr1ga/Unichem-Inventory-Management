<?php

include('../crud/db_connect.php');

if(!isset($_GET['supplierID'])){

    $getSupplierList = "SELECT * FROM supplier LIMIT 1";

    if ($result = mysqli_query($conn, $getSupplierList)) {
        if ($defaultSupplier = mysqli_fetch_assoc($result)) {
            $_GET['supplierID'] = $defaultSupplier['supplierID'];
        }
    }
   
}