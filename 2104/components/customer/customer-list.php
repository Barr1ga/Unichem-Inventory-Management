
        <?php
        
        $CustomerID = $customer["customerID"];
        $CustomerFName = $customer["customerFName"];
        $CustomerLName = $customer["customerLName"];
        
            echo "
                    <form method='get' action='customers.php'>
                        
                        <div class='d-flex align-items-center justify-content-between white-box-container one-supplier-customer-list round-edge'>
                            <div class='column list-name'>
                                <b>" . "$CustomerID" . "# " . "$CustomerFName" . " " . "$CustomerLName" . "</b>
                            </div>
                            <div class=''>
                                    <form method='get' action='../sections/customers.php'>
                                        <input type='hidden' name='customerID' value='".$CustomerID."'>
                                        <button type='submit' class='btn btn-link btn-update'>Preview</button>
                                    </form>
                            </div>

                            <div class=''>
                                    <form method='post' action='../sections/delete.php'>
                                        <input type='hidden' name='delete' value='customer'>
                                        <input type='hidden' name='customerID' value='".$CustomerID."'>
                                        <button type='submit' class='btn btn-link btn-delete'>Delete</button>
                                    </form>
                            </div>
                        </div>
                    </form>
                ";
        

        ?>

