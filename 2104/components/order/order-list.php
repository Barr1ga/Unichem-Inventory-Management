<!-- Order List -->

<?php
$modal = $order['orderStatus'] . $order['orderID'];
echo "
    <form method='get' action='orders.php'>
        <div class='d-flex align-items-center justify-content-between white-box-container one-order-replenishment-list round-edge'>
            <div class='list-cell'>
                <b>" . $order['orderID'] . "</b>
            </div>

            <div class='list-cell'>
            " . $order['customerLName'] . ", " . $order['customerFName'] . "
            </div>
            
            <div class='list-cell'>
                " . $order['userLastName'] . ", " . $order['userFirstName'] . "
            </div>

            <div class='list-cell'>
                " . $order['orderDate'] . "
            </div>

            <div class='list-cell'>
                " . $order['contactNo'] . "
            </div>
                
            <div class='list-cell'>
            " . "₱ " . $order['Total'] . "
            </div>

            <div class=''>
                <form method='get' action=''>
                    <input type='hidden' name='orderID' value='" . $order['orderID'] . "'>
                    <input type='hidden' name='orderActive' value='" . $order['orderStatus'] . "'>
                    <button type='submit' class='btn btn-link btn-preview'>Preview</button>
                </form>
            </div>

            <div class=''>
                    <input type='hidden' name='orderID' value='" . $order['orderID'] . "'>
                    <a type='button' class='btn btn-link btn-update' data-bs-toggle='modal' data-bs-target='" . "#" . $modal . "'>Update</a>
            </div>

            <div class=''>
                <form method='post' action='../sections/delete.php'>
                    <input type='hidden' name='delete' value='order'>
                    <input type='hidden' name='orderID' value='" . $order['orderID'] . "'>
                    <button type='submit' class='btn btn-link btn-delete'>Delete</button>
                </form>
            </div>

        </div>
    </form>
";
?>

<!-- Update Modal -->

<?php
    $class = "";

    if ($order['orderStatus'] == "Completed") {
        $class = "invisible";
    }
?>

<div class="modal fade" id="<?php echo $modal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                <a type="button" class="btn btn-outline-primary btn-sm <?php echo $class ?>" data-bs-dismiss="modal" aria-label="Close">
                    <?php  echo substr($order['orderStatus'], 3); ?>
                </a>
            </div>
            <div class="modal-body">
            
                <form class="row g-3" method="post" action="../crud/order/update-order.php">
                    <b>Product Information</b>
                    <?php
                        include("../crud/order/get-orders.php")
                    ?>

                    <div class="col-md-6">
                        <label class="col-form-label">Order Date</label>
                        <input type="date" class="form-control" name="orderDate" value="<?php echo $order['orderDate'] ?>" />
                    </div>

                    <div class="col-md-6">
                        <label class="col-form-label">Ship Required Date</label>
                        <input type="date" class="form-control" name="shippingDate" value="<?php echo $order['shipRequiredDate'] ?>" />
                    </div>

                    <hr>
                    <b>Customer Information</b>

                    <div class="col-md-4">
                        <label class="col-form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" value="<?php echo $order['customerFName'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $order['customerLName'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $order['email'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" value="<?php echo $order['dateofBirth'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Gender (M/F)</label>
                        <input type="text" class="form-control" name="gender" value="<?php echo $order['gender'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contactNo" value="<?php echo $order['contactNo'] ?>" />
                    </div>

                    <hr>
                    <b>Customer Address</b>

                    <div class="col-md-4">
                        <label class="col-form-label">Street</label>
                        <input class="form-control" name="street" value="<?php echo $order['street'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Barangay</label>
                        <input type="text" class="form-control" name="barangay" value="<?php echo $order['barangay'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $order['city'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Region</label>
                        <input class="form-control" name="region" value="<?php echo $order['region'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Country</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $order['country'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Zip</label>
                        <input type="text" class="form-control" name="zip" value="<?php echo $order['zip'] ?>" />
                    </div>
                
                </div>

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