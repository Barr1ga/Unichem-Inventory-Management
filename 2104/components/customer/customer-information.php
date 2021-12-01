
<div class="container white-box-container customer-supplier-information round-edge">
    <div class="row">
        <div class="col">
            <h4><b><?php echo $customer['customerID']; ?></b></h3>
        </div>
        <div class="col d-flex justify-content-end">
            <form method="get" action="../sections/customer-update.php">
                <input type="hidden" name="productID" value="<?php echo $customer['customerID']; ?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
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
                $customer['customerFName']." ".$customer['customerLName']."<br>".
                $customer['contactNo']."<br>".
                $customer['email'];
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
            State<br>
            Zip<br>
            Country
        </div>
        <div class="col-8">
            <b>
                <?php echo
                $customer['addressID']."<br>".
                $customer['street']."<br>".
                $customer['barangay']."<br>".
                $customer['city']."<br>".
                $customer['region']."<br>".
                $customer['zip']."<br>".
                $customer['country'];
                ?>
                
            </b>
        </div>

    </div>

</div>