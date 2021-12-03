<?php

include('../crud/db_connect.php');

if(!isset($_GET['productID'])){

    $getProductList = "SELECT * FROM product LIMIT 1";

    if ($result = mysqli_query($conn, $getProductList)) {
        if ($defaultproduct = mysqli_fetch_assoc($result)) {
            $_GET['productID'] = $defaultproduct['productID'];
        }
    }
   
}