
    <div class="">

            <!-- QUERRY TO SELECT ALL PRODUCTS ON LOW STOCKS-->
            <!-- <?php

                   $getLowStock = "SELECT * FROM product p WHERE p.inStock <= p.minimumStock"; 

                   $lowStockQuery = mysqli_query($conn,$getLowStock);

                ?> 
                -->
                <?php
                   if(mysqli_num_rows($lowStockQuery)>0){
                    $_SESSION['flag'] = 1;
                    ?>
                    Inventory<br>
                    <br>
                    <br>
                    <?php
                       while($row = mysqli_fetch_array($lowStockQuery)){
                        echo "
                            <div class='d-flex align-items-center justify-content-between white-box-container one-supplier-customer-list-long round-edge'>
                                <div class='column d-flex align-items-center reports-left-data'>
                                    <img src='../assets/images/low-stock-notif.png' width='20' height='20'>
                                    &nbsp
                                    &nbsp
                                    &nbsp
                                    <div>
                                        <div>
                                            <b>Low On Stock</b>
                                        </div>

                                        <div>";
                                            
                                        if($row['inStock'] == $row['minimumStock']){
                                            echo  "".$row['tradeName']." is at minimum stock";
                                            }
                                        elseif($row['inStock'] < $row['minimumStock'] AND $row['inStock'] > 0){
                                            echo  "".$row['tradeName']." is below minimum stock";
                                            }
                                        elseif($row['inStock'] == 0){
                                            echo  "".$row['tradeName']." stock is at 0!";
                                        }
                            echo "      </div>
                                    </div>
                                        </div>
                                            <div class='column reports-right-data'>
                                                Product ID: ".$row['productID']."
                                            </div>
                                            <div class='column reports-right-data'>
                                                ".$row['tradeName']."
                                            </div>
                                            <div class='column reports-right-data'>
                                                Qty: ".$row['inStock']."
                                            </div>
                                        </div>";
                       }
                   }
                ?>
    </div>
</body>

</html>