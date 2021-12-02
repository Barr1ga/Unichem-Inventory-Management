<form method="post" action="../sections/update.php" class="row g-3">
                        <input type="hidden" name="update" value="inventory">
                        <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
                        <div class="col-md-6">
                            <label for="inputProdName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="inputProdName" name="tradeName" required value="<?php echo $inventory['tradeName']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputID" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="inputID" name="customerLName" required value="<?php echo $inventory['productID']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="inputDescription" rows="3" required value="<?php echo $inventory["description"];?>"></textarea>
                        </div>
                        

                        <br><br><br><br><br><hr>
                        <br><br>

                        <div class="col-md-4">
                            <label for="inputDate" class="form-label">Date Contained</label>
                            <input type="date" class="form-control" id="inputDate" name="street" required value="<?php echo $inventory['dateContained']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Price</label>
                            <input type="text" class="form-control" id="inputEmail4" name="barangay" required value="<?php echo $customer['barangay']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputPassword4" name="city" required value="<?php echo $customer['city']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label">Region</label>
                            <input type="text" class="form-control" id="inputCity" name="region" required value="<?php echo $customer['region']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Country</label>
                            <input type="text" class="form-control" id="inputCity" name="country" required value="<?php echo $customer['country']; ?>">
                        </div>
                        <<div class="mb-3">
                            <label for="formFile" class="form-label">Product Image</label>
                            <input class="form-control" type="file" id="formFile" required value="<?php echo $productImage['productImage']; ?>">
                        </div>