<div class="scroll-list-2">
    <div class="white-box-container rounded form-create-order">
        <h4>Create Order</h4>
        <br>
        <form method="post" action="../crud/order/create-order.php" class="row g-3">

            <hr>
            <b>Product Information</b>
            <br><br>

            <?php include "../crud/order/get-products.php" ?>

            <div class="col-md-4">
                <label class="form-label">Select Product</label>
                <select class="form-select form-select-md mb-3" name="productID[]">
                    <option selected disabled>Products</option>
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value=" . $row['productID'] . ">" . $row['tradeName'] . "</option>";
                            }
                        } else {
                            echo "No items are found in the database.";
                        }
                    ?>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" name="quantity[]">
            </div>

            <div class="col-md-4">
                <label class="form-label">Ship Required Date</label>
                <input type="date" class="form-control" name="shippingDate">
            </div>

            <div class="paste-new-forms"></div>

            <div class="add-more col-12">
                <a href="javascript:void(0)" class="add-more-form btn btn-success btn-sm">Add More</a>
            </div>
            <hr>

            <b>Customer Information</b>
            <br><br>

            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" class="form-control" name="customerFname">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="customerLname">
            </div>
            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" name="emailAddress">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" name="dateOfBirth">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option value="M" selected>Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="contactNo">
            </div>

            <br><br><br><br><br>
            <hr>
            <b>Customer Address</b>
            <br><br>

            <div class="col-md-4">
                <label for="inputEmail4" class="form-label">Street</label>
                <input type="text" class="form-control" name="street">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Barangay</label>
                <input type="text" class="form-control" name="barangay">
            </div>
            <div class="col-md-4">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="col-md-4">
                <label for="inputPassword4" class="form-label">Region</label>
                <input type="text" class="form-control" name="region">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Country</label>
                <input type="text" class="form-control" name="country">
            </div>
            <div class="col-md-4">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" name="zip">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create Order</button>
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
                            <select class="form-select form-select-md mb-3" name="productID[]">\
                                <option selected disabled>Products</option>\
                                <?php if (mysqli_num_rows($result) > 0) { while ($row = mysqli_fetch_assoc($result)) { echo "<option value=" . $row['productID'] . ">" . $row['tradeName'] . "</option>";}} else { echo "bad"; }?>\
                            </select>\
                        </div>\
                        <div class="col-md-4">\
                            <label class="form-label">Quantity</label>\
                        <input type="number" class="form-control" name="quantity[]">\
                        </div>\
                        <div class="col-md-4">\
                            <div class="form-group mb-2">\
                                <br>\
                                <button type="button" class="remove-btn btn btn-danger btn-sm">Remove</button>\
                            </div>\
                        </div>\
                    </div>\
                </div>');
        });

    });
</script>