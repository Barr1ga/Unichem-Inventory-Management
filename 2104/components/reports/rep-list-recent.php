<?php
include('../crud/db_connect.php');
?>
<?php include('../style/import.php'); ?>
    <div class="">

            <!-- QUERRY TO SELECT ALL RECENT REPLENISHMENTS -->
            <!-- <?php
                   $getRecentReps = "SELECT * FROM replenishment r WHERE DATEDIFF(r.repOrderDate, CURDATE()) <= 1 AND DATEDIFF(r.repOrderDate, CURDATE()) > -1";

                   $recentRepsQuery = mysqli_query($conn,$getRecentReps);
                    ?> -->

            <?php

            if(mysqli_num_rows($recentRepsQuery)>0){
                ?>
                Replenishments<br>
                <br>
                <br>
                <?php
                while($row = mysqli_fetch_array($recentRepsQuery)){

                    $getSupplierInfo = "SELECT * FROM supplier s WHERE s.supplierID = '$row[supplierID]'";
                    $supplierInfoQuery = mysqli_query($conn,$getSupplierInfo);
                    $row2 = mysqli_fetch_array($supplierInfoQuery);

                    $getProductID = "SELECT * FROM replenishment_line rl WHERE rl.repOrderID = '$row[repOrderID]'";
                    $productIDQuery = mysqli_query($conn,$getProductID);
                    while($row3 = mysqli_fetch_array($productIDQuery)){

                    $getProdInfo = "SELECT * FROM product p WHERE p.productID = '$row3[productID]'";
                    $prodInfoQuery = mysqli_query($conn,$getProdInfo);
                    $row4 = mysqli_fetch_array($prodInfoQuery);


                echo "
                    <form method='get' action='customers.php'>
                        <div class='d-flex align-items-center justify-content-between white-box-container one-supplier-customer-list-long round-edge'>
                            <div class='column d-flex align-items-center reports-left-data'>
                                <div>
                                    <b>".$row2['supplierID']."# ".$row2['companyName']."</b>
                                </div>
                            </div>
                                <div class='column reports-right-data'>
                                    Rep ID: ".$row['repOrderID']."
                                </div>
                                <div class='column reports-right-data'>
                                    ".$row4['tradeName']."
                                </div>
                                <div class='column reports-right-data'>
                                    Qty: ".$row3['quantity']."
                                </div>
                                <div class='column reports-right-data'>
                                    P".$row3['quantity']*$row4['price']."
                                </div>
                        </div>
                    </form>
                ";
                    }
                }
            }
            
            ?>
    </div>
</body>

</html>