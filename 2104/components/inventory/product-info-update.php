<form method="post" action="../sections/update.php" class="row g-3">
                        <input type="hidden" name="update" value="product">
                        <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>">
                        <div class="col-md-6">
                            <label for="inputProdName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="inputProdName" name="tradeName" required value="<?php echo $inventory['tradeName']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputID" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="inputID" name="productID" required value="<?php echo $inventory['productID']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="inputDescription" rows="3" required value="<?php echo $inventory["description"];?>"></textarea>
                        </div>
                        

                        <br><br><br><br><br><hr>
                        <br><br>

                        <div class="col-md-4">
                            <label for="inputDate" class="form-label">Date Contained</label>
                            <input type="date" class="form-control" id="inputDate" name="date" required value="<?php echo $inventory['dateContained']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Price</label>
                            <input type="text" class="form-control" id="inputEmail4" name="price" required value="<?php echo $inventory['price']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Application Type</label>
                            <input type="text" class="form-control" id="inputEmail4" name="applicationType" required value="<?php echo $inventory['applicationType']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Cure Time</label>
                            <input type="text" class="form-control" id="inputEmail4" name="cureTime" required value="<?php echo $inventory['cureTime']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Color</label>
                            <input type="text" class="form-control" id="inputEmail4" name="color" required value="<?php echo $inventory['color']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Form</label>
                            <input type="text" class="form-control" id="inputEmail4" name="form" required value="<?php echo $inventory['form']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Package Type</label>
                            <input type="text" class="form-control" id="inputEmail4" name="packageType" required value="<?php echo $inventory['packageType']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Package Size</label>
                            <input type="text" class="form-control" id="inputEmail4" name="packageSize" required value="<?php echo $inventory['packageSize']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Min Operating Temp</label>
                            <input type="text" class="form-control" id="inputEmail4" name="minOperatingTemp" required value="<?php echo $inventory['minOperatingTemp']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Max Operating Temp</label>
                            <input type="text" class="form-control" id="inputEmail4" name="macOperatingTemp" required value="<?php echo $inventory['maxOperatingTemp']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Viscosity</label>
                            <input type="text" class="form-control" id="inputEmail4" name="viscosity" required value="<?php echo $inventory['viscosity']; ?>">
                        </div>
                        
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Temp Range</label>
                            <input type="text" class="form-control" id="inputEmail4" name="tempRange" required value="<?php echo $inventory['operatingTempRange']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">In Stock</label>
                            <input type="text" class="form-control" id="inputEmail4" name="inStock" required value="<?php echo $inventory['inStock']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Chemical Composition</label>
                            <input type="text" class="form-control" id="inputEmail4" name="chemicalComposition" required value="<?php echo $inventory['chemicalComposition']; ?>">
                        </div>
                        <<div class="mb-3">
                            <label for="formFile" class="form-label">Product Image</label>
                            <input class="form-control" type="file" id="formFile" required value="<?php echo $productImage['productImage']; ?>">
                        </div>