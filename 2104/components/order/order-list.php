<!-- QUERRY TO SELECT ALL CUSTOMERS/SUPPLIER -->
<?php

echo "

                    <form method='get' action='customers.php'>
                        <div class='d-flex align-items-center justify-content-between white-box-container one-order-replenishment-list round-edge'>
                            <div class='list-cell'>
                                <b>" . $order['orderID'] . "</b>
                            </div>

                            <div class='list-cell'>
                            " . $order['customerFName'] . " ".$order['customerLName']. "
                            </div>
                            
                            <div class='list-cell'>
                                ". $order['userFirstName'] ." ". $order['userLastName']. "
                            </div>

                            <div class='list-cell'>
                                ". $order['orderDate'] ."
                            </div>

                            <div class='list-cell'>
                                ". $order['contactNo'] ."
                            </div>
                                
                            <div class='list-cell'>
                            ". "₱ " . $order['price'] * $order['quantity'] ."
                            </div>

                            <div class=''>
                                    <form method='get' action=''>
                                        <input type='hidden' name='' value=''>
                                        <button type='submit' class='btn btn-link btn-update'>Preview</button>
                                    </form>
                            </div>

                            <div class=''>
                            <form method='get' action=''>
                                <input type='hidden' name='' value=''>
                                <button type='submit' class='btn btn-link btn-update'>Update</button>
                            </form>
                            </div>

                            <div class=''>
                                    <form method='get' action=''>
                                        <input type='hidden' name='' value=''>
                                        <button type='submit' class='btn btn-link btn-delete'>Delete</button>
                                    </form>
                            </div>

                        </div>
                    </form>
                ";
?>