<!-- QUERRY TO SELECT ALL CUSTOMERS/SUPPLIER -->
<?php

echo "

                    <form method='get' action='customers.php'>
                        <div class='d-flex align-items-center justify-content-between white-box-container one-order-replenishment-list round-edge'>
                            <div class='list-cell'>
                                <b>" . $rep['repOrderID'] . "</b>
                            </div>

                            <div class='list-cell'>
                            " . $rep['companyName'] ."
                            </div>
                            
                            <div class='list-cell'>
                                ". $rep['userFirstName'] ." ". $rep['userLastName']. "
                            </div>

                            <div class='list-cell'>
                                ". $rep['repOrderDate'] ."
                            </div>

                            <div class='list-cell'>
                                ". $rep['contactNo'] ."
                            </div>
                                
                            <div class='list-cell'>
                            ". "₱ " . $rep['price'] * $rep['quantity'] ."
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