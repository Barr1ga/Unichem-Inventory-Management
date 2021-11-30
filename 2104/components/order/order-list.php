<?php
$modal = $order['orderStatus'] . $order['orderID'];
echo "
    <form method='get' action='orders.php'>
        <div class='d-flex align-items-center justify-content-between white-box-container one-order-replenishment-list round-edge'>
            <div class='list-cell'>
                <b>" . $order['orderID'] . "</b>
            </div>

            <div class='list-cell'>
            " . $order['customerFName'] . " " . $order['customerLName'] . "
            </div>
            
            <div class='list-cell'>
                " . $order['userFirstName'] . " " . $order['userLastName'] . "
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
                    <input type='hidden' name='active' value='" . $order['orderStatus'] . "'>
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

<div class="modal fade" id="<?php echo $modal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <b>Product Information</b>
                <form class="row g-3">
                    <?php
                    include("../crud/order/order-created.php")
                    ?>

                    <hr>
                    <b>Customer Information</b>

                    <div class="col-md-4">
                        <label class="col-form-label">First Name</label>
                        <input class="form-control" name="fname" value="<?php echo $order['customerFName'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" value="<?php echo $order['customerLName'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" name="lname" value="<?php echo $order['email'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Date of Birth</label>
                        <input class="form-control" name="dateofBirth" value="<?php echo $order['dateofBirth'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Gender (M/F)</label>
                        <input type="text" class="form-control" name="gender" value="<?php echo $order['gender'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Contact Number</label>
                        <input type="email" class="form-control" name="contactNo" value="<?php echo $order['contactNo'] ?>" />
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
                        <input type="email" class="form-control" name="city" value="<?php echo $order['city'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Region</label>
                        <input class="form-control" name="region" value="<?php echo $order['region'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Country (M/F)</label>
                        <input type="text" class="form-control" name="gender" value="<?php echo $order['country'] ?>" />
                    </div>

                    <div class="col-md-4">
                        <label class="col-form-label">Zip</label>
                        <input type="email" class="form-control" name="contactNo" value="<?php echo $order['zip'] ?>" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>