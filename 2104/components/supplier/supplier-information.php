

<div class="container white-box-container customer-supplier-information round-edge">
    <div class="row">
        <div class="col">
            <h4><b><?php echo $supplier['supplierID']; ?></b></h3>
        </div>
        <div class="col d-flex justify-content-end">
            
            <!-- <form method="get" action="../sections/supplier-update.php">
                <input type="hidden" name="productID" value="<?php 
                // echo $supplier['supplierID']; ?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form> -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Update
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Update Supplier <?php echo $supplier['supplierID']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php include('supplier-update.php');?>
                    </div>
                    <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" value="submit">Update</button>
                            
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <b><?php echo $supplier['companyName']; ?></b>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            Contact Person<br>
            Contact No<br>
            Email Address
        </div>
        <div class="col-8">
            <b>
                <?php echo
                $supplier['contactFName'] ." ". $supplier['contactLName']."<br>".
                $supplier['contactNo']."<br>".
                $supplier['email'];
                ?>
            </b>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col">
            Address ID<br>
            Street<br>
            Barangay<br>
            City<br>
            Region<br>
            Zip<br>
            Country
        </div>
        <div class="col-8">
            <b>
                <?php echo
                $supplier['addressNo']."<br>".
                $supplier['street']."<br>".
                $supplier['barangay']."<br>".
                $supplier['city']."<br>".
                $supplier['region']."<br>".
                $supplier['zip']."<br>".
                $supplier['country'];
                ?>
                
            </b>
        </div>

    </div>

</div>