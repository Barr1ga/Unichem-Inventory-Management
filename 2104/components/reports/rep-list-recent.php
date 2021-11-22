<?php
include('../crud/db_connect.php');
?>
<?php include('../style/import.php'); ?>
    <div class="">

            <!-- QUERRY TO SELECT ALL RECENT REPLENISHMENTS -->
            <!-- <?php
                   $getRecentReps = "SELECT * FROM replenishment r WHERE DATEDIFF(r.repOrderDate, CURDATE()) <= 1 AND DATEDIFF(r.repOrderDate, CURDATE()) > 0";

                   $recentRepsQuery = mysqli_query($conn,$getRecentReps);
                    ?> -->

            <?php

            if(mysqli_num_rows($recentRepsQuery)>0){
                while($row = mysqli_fetch_array($recentRepsQuery)){

                    $getSupplierInfo = "SELECT * FROM supplier s WHERE s.supplierID = '$row[supplierID]'";
                    $supplierInfoQuery = mysqli_query($conn,$getSupplierInfo);
                    $row2 = mysqli_fetch_array($supplierInfoQuery);

                    $getProductID = "SELECT productID FROM replenishment_line rl WHERE rl.repOrderID = '$row[repOrderID]'";
                    $productIDQuery = mysqli_query($conn,$getProductID);
                    $row3 = mysqli_fetch_array($productIDQuery);

                    $getTradeName = "SELECT tradeName FROM product p WHERE p.productID = '$row3[productID]'";
                    $tradeNameQuery = mysqli_query($conn,$getTradeName);
                    $row4 = mysqli_fetch_array($tradeNameQuery);

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
                                    P".$row['totalPrice']."
                                </div>
                        </div>
                    </form>
                ";
                }
            }
            
            ?>
    </div>
</body>

</html>