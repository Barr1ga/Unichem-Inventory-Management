<form method="post" action="../sections/update.php" class="row g-3">
                        <input type="hidden" name="update" value="product">
                        <input type="hidden" name="productID" value="<?php echo $inventory['productID']; ?>">
                        <div class="col-md-6">
                            <label for="inputProdName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="inputProdName" name="tradeName" value="<?php echo $inventory['tradeName']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="inputID" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="inputID" name="productID" value="<?php echo $inventory['productID']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="inputDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="inputDescription" name="description" rows="3" value="<?php echo $inventory['description'];?>"></textarea>
                        </div>
                        

                        <br><br><br><br><br><hr>
                        <br><br>

                        <div class="col-md-4">
                            <label for="inputDate" class="form-label">Date Contained</label>
                            <input type="date" class="form-control" id="inputDate" name="dateContained" value="<?php echo $inventory['dateContained']; ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="inputBrand" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" id="inputBrand" name="brandName" value="<?php echo $inventory['brandName']; ?>">
                        </div>

                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Price</label>
                            <input type="text" class="form-control" id="inputEmail4" name="price" value="<?php echo $inventory['price']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Application Type</label>
                            <input type="text" class="form-control" id="inputEmail4" name="applicationType" value="<?php echo $inventory['applicationType']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Cure Time</label>
                            <input type="text" class="form-control" id="inputEmail4" name="cureTime" value="<?php echo $inventory['cureTime']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Color</label>
                            <input type="text" class="form-control" id="inputEmail4" name="color" value="<?php echo $inventory['color']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Form</label>
                            <input type="text" class="form-control" id="inputEmail4" name="form" value="<?php echo $inventory['form']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Package Type</label>
                            <input type="text" class="form-control" id="inputEmail4" name="packageType" value="<?php echo $inventory['packageType']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Package Size</label>
                            <input type="text" class="form-control" id="inputEmail4" name="packageSize" value="<?php echo $inventory['packageSize']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Min Operating Temp</label>
                            <input type="text" class="form-control" id="inputEmail4" name="minOperatingTemp" value="<?php echo $inventory['minOperatingTemp']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Max Operating Temp</label>
                            <input type="text" class="form-control" id="inputEmail4" name="maxOperatingTemp" value="<?php echo $inventory['maxOperatingTemp']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Viscosity</label>
                            <input type="text" class="form-control" id="inputEmail4" name="viscosity" value="<?php echo $inventory['viscosity']; ?>">
                        </div>
                        
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Temp Range</label>
                            <input type="text" class="form-control" id="inputEmail4" name="operatingTempRange" value="<?php echo $inventory['operatingTempRange']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">In Stock</label>
                            <input type="text" class="form-control" id="inputEmail4" name="inStock" value="<?php echo $inventory['inStock']; ?>">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEmail4" class="form-label">Chemical Composition</label>
                            <input type="text" class="form-control" id="inputEmail4" name="chemicalComposition" value="<?php echo $inventory['chemicalComposition']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Product Image</label>
                            <input class="form-control" type="file" id="formFile" name="productImage" value="<?php echo $productImage['productImage']; ?>">
                        </div>
