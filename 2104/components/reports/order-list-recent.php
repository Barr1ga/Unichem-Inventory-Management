<?php
include('../crud/db_connect.php');
?>
<?php include('../style/import.php'); ?>
    <div class="">

            <!-- QUERRY TO SELECT ALL RECENT ORDERS -->
            <!-- <?php
                   $getRecentOrders = "SELECT * FROM orders o WHERE DATEDIFF(o.orderDate, CURDATE()) <= 1 AND DATEDIFF(o.orderDate, CURDATE()) > 0";

                   $recentOrderQuery = mysqli_query($conn,$getRecentOrders);

                   
                    ?> -->

            <?php

            if(mysqli_num_rows($recentOrderQuery)>0){
                while($row = mysqli_fetch_array($recentOrderQuery)){

                    $getCustomerInfo = "SELECT * FROM customer c WHERE c.customerID = '$row[customerID]'";
                    $customerInfoQuery = mysqli_query($conn,$getCustomerInfo);
                    $row2 = mysqli_fetch_array($customerInfoQuery);

                    $getProductID = "SELECT productID FROM order_line ol WHERE ol.orderID = '$row[orderID]'";
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
                                    <b>".$row2['customerID']."# ".$row2['customerFName']." ".$row2['customerLName']."</b>
                                </div>
                            </div>
                                <div class='column reports-right-data'>
                                    Order ID: ".$row['orderID']."
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