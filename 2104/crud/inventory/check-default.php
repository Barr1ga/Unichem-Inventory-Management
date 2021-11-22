<?php

include('../crud/db_connect.php');

if(!isset($_GET['productID'])){

    $getProductList = "SELECT * FROM product LIMIT 1";

    $result = mysqli_query($conn, $getProductList);
       
    $defaultproduct = mysqli_fetch_assoc($result);
            

    $_GET['productID'] = $defaultproduct['productID'];
}