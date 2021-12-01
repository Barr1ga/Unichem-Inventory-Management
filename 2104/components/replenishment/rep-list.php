<!-- Rep List -->
<?php
$modal = $rep['orderStatus'] . $rep['repOrderID'];
echo "
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

        <div>
            <form method='get' action='replenishments.php'>
                <input type='hidden' name='repID' value='".$rep['repOrderID']."'>
                <input type='hidden' name='repActive' value='" . $rep['orderStatus'] . "'>
                <button type='submit' class='btn btn-link btn-preview'>Preview</button>
            </form>
        </div>

        <div>
            <a type='button' class='btn btn-link btn-update' data-bs-toggle='modal' data-bs-target='" . "#" . $modal . "'>Update</a>
        </div>

        <div>
            <form method='post' action='../sections/delete.php'>
                <input type='hidden' name='delete' value='replenishment'>
                <input type='hidden' name='repID' value='".$rep['repOrderID']."'>
                <button type='submit' class='btn btn-link btn-delete'>Delete</button>
            </form>
        </div>

    </div>

";
?>

<!-- Update Modal -->

<?php
    $class = "";

    if ($rep['orderStatus'] == "Completed") {
        $class = "invisible";
    }
?>

<div class="modal fade" id="<?php echo $modal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                <a type="button" class="btn btn-outline-primary btn-sm <?php echo $class ?>" data-bs-dismiss="modal" aria-label="Close">
                    <?php  echo substr($rep['orderStatus'], 3); ?>
                </a>
            </div>
            <div class="modal-body">

                <form class="row g-3" method="post" action="../crud/replenishment/update-repOrder.php">
                    <b>Product Information</b>

                        <div class="modal-footer">
                        <input type='hidden' name='orderID' value=" <?php echo $order['orderID'] ?>">
                        <input type='hidden' name='customerID' value=" <?php echo $order['customerID'] ?>">
                        <input type='hidden' name='addressID' value=" <?php echo $order['addressID'] ?>">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</div>

