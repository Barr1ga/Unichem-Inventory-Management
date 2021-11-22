<?php
// include('db/dbh.php');
// session_start();
?>

<div class="">
        <?php
        echo "
        
        <div class='container-header d-flex'>
                <div class='list-cell'>
                        Order ID
                </div>
                
                <div class='list-cell'>
                        Order By
                </div>
                
                <div class='list-cell'>
                        Approved By
                </div>

                <div class='list-cell'>
                        Order Date
                </div>

                <div class='list-cell'>
                        Contact Person
                </div>

                <div class='list-cell'>
                        Total Price
                </div>

                <div class='list-cell'>
                        
                </div>

                <div class='list-cell'>
                        
                </div>

                
            </div>

            ";

        ?>
        <br>
        <div class="scroll-list-2">

                <!-- QUERRY TO SELECT ALL CUSTOMERS/SUPPLIER -->
                <!-- <?php

                        $OrderID = "1001";
                        $OrderBy = "Nikolai Tumapon";
                        $ApprovedBy = "Horeb Barriga";
                        $OrderDate = "2015-12-09";
                        $ContactPerson = "Van AJ Vanguardia";
                        $TotalPrice = "1000.00";


                        ?> -->

                <?php
                $SupplierID = "1001";
                $SupplierName = "Nikolai Tumapon";




                for ($i = 0; $i < 10; $i++) {
                        echo "

                    <form method='get' action='customers.php'>
                        <div class='d-flex align-items-center justify-content-between white-box-container one-order-replenishment-list round-edge'>
                            <div class='list-cell'>
                                <b>" . "$OrderID" . "</b>
                            </div>
                            
                            <div class='list-cell'>
                                    $OrderBy
                            </div>
                            
                            <div class='list-cell'>
                                    $ApprovedBy
                            </div>

                            <div class='list-cell'>
                                    $OrderDate
                            </div>

                            <div class='list-cell'>
                                    $ContactPerson
                            </div>

                            <div class='list-cell'>
                                $TotalPrice
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
                }

                ?>
        </div>
</div>