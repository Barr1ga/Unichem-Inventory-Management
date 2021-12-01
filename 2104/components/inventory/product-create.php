<div class="container white-box-container round-edge">
    <div class="scroll-list-2">
                    <form method="post" action="../sections/create.php" class="row g-3">
                        <input type="hidden" name="create" value="product">
                        <h4>Create Product</h4>
                        <input type="hidden" name="customerID">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Trade Name</label>
                            <input type="text" class="form-control" id="inputEmail4" name="tradeName" required?>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" id="inputPassword4" name="brandName" required >
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Description</label>
                            <input type="temxt" class="form-control" id="" placeholder="" name="description" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Date Contained</label>
                            <input type="date" class="form-control" id="inputCity" name="dateContained" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Price</label>
                            <input type="number" class="form-control" id="inputCity" name="price" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Application Type</label>
                            <input type="text" class="form-control" id="inputZip" name="applicationType" required>
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Cure Time</label>
                            <input type="time" class="form-control" id="inputEmail4" name="cureTime" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Color</label>
                            <input type="text" class="form-control" id="inputEmail4" name="color" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Form</label>
                            <input type="text" class="form-control" id="inputPassword4" name="form" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Package Type</label>
                            <input type="text" class="form-control" id="inputCity" name="packageType" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Package Size</label>
                            <input type="text" class="form-control" id="inputCity" name="packageSize" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Minimum Operating Temperature</label>
                            <input type="text" class="form-control" id="inputZip" name="minOperatingTemp" required>
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Maximum Operating Temperature</label>
                            <input type="text" class="form-control" id="inputZip" name="maxOperatingTemp" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Viscosity</label>
                            <input type="text" class="form-control" id="inputZip" name="viscosity" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Chemical Composition</label>
                            <input type="text" class="form-control" id="inputZip" name="chemicalComposition" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">Operating Temperature Range</label>
                            <input type="text" class="form-control" id="inputZip" name="operatingTempRange" required>
                        </div>
                        <div class="col-md-6">
                            <label for="inputZip" class="form-label">In Stock</label>
                            <input type="number" class="form-control" id="inputZip" name="inStock" required>
                        </div>
                        <div class="col-md-4"><br>
                            <button type="submit" class="btn btn-primary" value="submit">Create</button>
                        </div>
                        
                    </form>
    </div>
</div>