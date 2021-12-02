<form method="post" action="../crud/order/update-order.php">
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
                            <input type="hidden" name="defaultOrderStatus" value="<?php echo $order['orderStatus'] ?>">
                            <?php if ($order['orderStatus'] != "Awaiting-Approval") { ?>
                                <select class="form-select <?php echo $hide1 ?>" name="orderStatus">
                                    <option value="<?php echo $order['orderStatus'] ?>" selected disabled><?php echo $order['orderStatus'] ?></option>
                                    <option value="Awaiting-Payment">Awaiting Payment</option>
                                    <option value="Processing-Order">Processing Order</option>
                                    <option value="Awaiting-Shipment">Awaiting Shipment</option>
                                    <option value="Awaiting-Pickup">Awaiting Pickup</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Manual-Verification-Required">Manual Verification Required</option>
                                    <option value="Refunded">Refunded</option>
                                </select>
                                <!-- ELSE IF USER TYPE = MANAGER -->
                            <?php } else if ($_SESSION['userType'] == "Manager") { ?>
                                <a href="../crud/order/approve-order.php?id=<?php echo $order['orderID'] ?>" type="submit" class="btn btn-outline-primary">Approve</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="modal-body">

                    <div class="row g-3">
                        <b>Product Information</b>
                        <?php
                        include("../crud/get/get-orders.php")
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

                </div>

                <div class="modal-footer">
                    <input type='hidden' name='orderID' value=" <?php echo $order['orderID'] ?>">
                    <input type='hidden' name='customerID' value=" <?php echo $order['customerID'] ?>">
                    <input type='hidden' name='addressID' value=" <?php echo $order['addressID'] ?>">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

            </div>
        </div>
    </div>
</form>