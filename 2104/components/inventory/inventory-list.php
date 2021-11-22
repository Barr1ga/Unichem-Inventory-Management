

        <!-- QUERRY TO SELECT ALL CUSTOMERS/SUPPLIER -->
        <!-- <?php
    
                $productID = $inventory["productID"];
                $tradeName =  $inventory["tradeName"];
                $price = $inventory["price"];
                $quantity = $inventory["price"];


                ?> -->

        <?php
        


        

            echo "

                    <form method='get'>
                        <div class='d-flex align-items-center justify-content-between white-box-container one-order-replenishment-list round-edge'>
                            <div class='list-cell'>
                                <b>"."$productID"."</b>
                            </div>
                            
                            <div class='list-cell'>
                                    $tradeName
                            </div>
                            
                            <div class='list-cell'>
                                    $price     
                            </div>

                            <div class='list-cell'>
                                    $quantity
                            </div>

                            <div class='list-cell'>
                                    
                            </div>

                            <div class='list-cell'>
                                
                            </div>

                            <div class=''>
                            <form method='get' action='../sections/inventory.php'>
                            <input type='hidden' name='productID' value='".$productID."'>
                            <button type='submit' class='btn btn-link btn-update'>Preview</button>
                        </form>
                            </div>

                            <div class=''>
                            <form method='post' action='../sections/delete.php'>
                            <input type='hidden' name='delete' value='inventory'>
                            <input type='hidden' name='productID' value='".$productID."'>
                            <button type='submit' class='btn btn-link btn-delete'>Delete</button>
                        </form>
                            </div>

                        </div>
                    </form>
                ";

        ?>
    
