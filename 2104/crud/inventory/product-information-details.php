<?php 
    include('../crud/db_connect.php');

    if (isset($_GET['productID'])) {
        $productID = $_GET['productID'];
        
        $getProductInformation = "SELECT * 
                                    FROM product
                                    WHERE productID=$productID LIMIT 1";
                    

        if ($result = mysqli_query($conn, $getProductInformation)) {
            $inventory = mysqli_fetch_assoc($result);
        };
    }
?>













