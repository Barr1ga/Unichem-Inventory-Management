<!-- Rep List -->
<?php
$modal = $rep['orderStatus'] . $rep['repOrderID'];
echo "
    <form method='get' action='replenishments.php'>
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
                    <input type='hidden' name='repID' value='".$rep['repOrderID']."'>
                    <input type='hidden' name='repActive' value='" . $rep['orderStatus'] . "'>
                    <button type='submit' class='btn btn-link btn-preview'>Preview</button>
                </form>
            </div>

            <div class=''>
                <form method='get' action=''>
                    <input type='hidden' name='repID' value='".$rep['repOrderID']."'>
                    <button type='submit' class='btn btn-link btn-update'>Update</button>
                </form>
            </div>

            <div class=''>
                <form method='get' action='../sections/delete.php'>
                    <input type='hidden' name='delete' value='replenishment'>
                    <input type='hidden' name='repID' value='".$rep['repOrderID']."'>
                    <button type='submit' class='btn btn-link btn-delete'>Delete</button>
                </form>
            </div>

        </div>
    </form>
    ";
?>