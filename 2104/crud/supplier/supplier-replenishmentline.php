<?php 
    include('../crud/db_connect.php');

    $repOrderID = $Replenishment['repOrderID'];

    $getSupplierOrderLine = "SELECT * FROM replenishment_line rl, product p 
                            WHERE repOrderID=$repOrderID
                            AND rl.productID=p.productID";

    

    $result = mysqli_query($conn, $getSupplierOrderLine);
    $totalPrice=0;
    while ($ReplenishmentLine = mysqli_fetch_assoc($result)) {
            
        include('../components/supplier/supplier-replenishment.php');
        $totalPrice += $totalEach;
    }
  


