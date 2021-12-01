<div class="scroll-list-2">
    <div class="white-box-container rounded form-create-order">
        <h4>Create Order</h4>
        <form method="post" action="../crud/order/create-order.php" class="row g-3">

            <hr>
            <b>Product Information</b>

            <?php include "../crud/order/get-products.php" ?>

            <div class="col-md-4">
                <label class="form-label">Product</label>
                <select class="form-select form-select-md mb-3" name="productID[]" required>
                    <option value="">Select Product</option>
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value=" . $row['productID'] . ">" ."Name: ". $row['tradeName'] . "  Stock: ". $row['inStock'] ."</option>";
                            }
                        } else {
                            echo "No items are found in the database.";
                        }
                    ?>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity[]" required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Ship Required Date</label>
                <input type="date" class="form-control" name="shippingDate" required>
            </div>

            <div class="paste-new-forms"></div>

            <div class="add-more col-12">
                <a href="javascript:void(0)" class="add-more-form btn btn-success btn-sm">Add More</a>
            </div>
            <hr>

            <b>Customer Information</b>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Select Customer
                </button>

                <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Add Customer
                </button>

                <?php include "../crud/order/get-customers.php" ?>
                <div id="flush-collapseOne" class="accordion-collapse collapse mt-4" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">Customer</label>
                            <select class="form-select form-select-md mb-3" name="customer">
                                <option value="">Select Customer</option>
                                <?php
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($cus = mysqli_fetch_assoc($result)) {
                                            echo "<option value=" . $cus['customerID'] . ">" . $cus['customerFName']. " ". $cus['customerLName']. "</option>";
                                        }
                                    } else {
                                        echo "No customers were found in the database.";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                            <input type="submit" class="btn btn-primary" name="old" value="Create Order" />
                    </div>
                </div>

                <div id="flush-collapseTwo" class="accordion-collapse collapse mt-4" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="row g-3">

                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="customerFname">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="customerLname">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="emailAddress">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dateOfBirth">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="M" selected>Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" name="contactNo">
                        </div>

                        <hr>
                        <b>Customer Address</b>

                        <div class="col-md-4">
                            <label class="form-label">Street</label>
                            <input type="text" class="form-control" name="street">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Barangay</label>
                            <input type="text" class="form-control" name="barangay">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Region</label>
                            <input type="text" class="form-control" name="region">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Country</label>
                            <input type="text" class="form-control" name="country">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Zip</label>
                            <input type="text" class="form-control" name="zip">
                        </div>

                        <div class="col-12">
                            <input type="submit" class="btn btn-primary" name="new" value="Create Order" />
                        </div>
                    </div>
                </div>

            </div>


        </form>
    </div>


</div>

<script>
    <?php include "../crud/order/get-products.php" ?>
    $(document).ready(function() {

        $(document).on('click', '.remove-btn', function() {
            $(this).closest('.new-form').remove();
        });

        $(document).on('click', '.add-more-form', function() {
            $('.paste-new-forms').append('<div class="new-form">\
                    <div class="row">\
                        <div class="col-md-4">\
                            <label class="form-label">Select Product</label>\
                            <select class="form-select form-select-md mb-3" name="productID[]" required>\
                                <option value="">Select Product</option>\
                                <?php if (mysqli_num_rows($result) > 0) { while ($row = mysqli_fetch_assoc($result)) { echo "<option value=" . $row['productID'] . ">" ."Name: ". $row['tradeName'] ." Stock: ". $row['inStock']. "</option>"; }} else { echo "bad";} ?>\
                            </select>\
                        </div>\
                        <div class="col-md-4">\
                            <label class="form-label">Quantity</label>\
                        <input type="number" class="form-control" name="quantity[]" required>\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group mb-2">\
                                <button type="button" class="remove-btn btn btn-danger btn-sm">Remove</button>\
                            </div>\
                        </div>\
                    </div>\
                </div>');
        });

    });
    
</script>