<?php
$class1 = "";
$class2 = "";
$btnText = "";

// if ($order['orderStatus'] == "Awaiting-Approval" && $_SESSION['usertype'] != 'Manager') {
//     $class = "invisible";
// } 

switch ($order['orderStatus']) {
    case "Awaiting-Approval":
        $btnText = "Approve";
        break;
    case "Awaiting-Payment":
        $btnText = "Process Order";
        break;
    case "Processing-Order":
        $btnText = "Ship Order";
        break;
    case "Awaiting-Shipment":
        $btnText = "Pickup Order";
        break;
    case "Awaiting-Pickup":
        $btnText = "Complete";
        break;
    case "Completed":
        $class1 = "invisible";
        $class2 = "invisible";
        break;
    case "Cancelled":
        $btnText = "Refund";
        $class2 = "invisible";
        break;
    case "Refunded":
        $class1 = "invisible";
        $class2 = "invisible";
        break;

}


?>

<div class="modal fade" id="<?php echo $modal ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        <a href="../crud/order/order-process.php?ID=<?php echo $order['orderID'] ?>&status=<?php echo $order['orderStatus'] ?>" class="btn-process btn btn-outline-primary btn-sm <?php echo $class1 ?>">
                            <?php echo $btnText ?>
                        </a>
                    </div>

                    <div class="p-2">
                        <a href="../crud/order/order-process.php?ID=<?php echo $order['orderID'] ?>&status=<?php echo $order['orderStatus'] ?>" class="btn btn-outline-danger btn-sm <?php echo $class2 ?>">
                            Cancel
                        </a>
                    </div>
                </div>
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
                        <label class="col-form-label">Email Address</label>
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