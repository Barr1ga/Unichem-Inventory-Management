<div class="to-confirm white-box-container-details-card-status bg-secondary mt-1 ">Shipping</div>
<div class="white-box-container-details-card-body rounded">
    <div class="row d-flex justify-content-between">
        <div class="col">
            <h5><b># <?php echo $order['productID'] ?></b></h5>
        </div>
        <div class="col-md-auto">
            <?php echo $order['orderDate'] ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6 col-md-4">
            Supplier<br>
            Created By<br>
            Approved By<br>
            Date Shipped
        </div>
        <div class="col-12 col-sm-6 col-md-8">
            <b>
                <?php
                echo "Supplier Name" . "<br>";
                // echo $CreatedBy['userFirstName']. $CreatedBy['userLastName'] ."<br>";
                echo $order['createdBy'] . "<br>";

                // echo $ApprovedBy['userFirstName']."<br>";
                echo $order['approvedBy'] . "<br>";
                echo $order['shipRequiredDate'];
                ?>
            </b>
        </div>
    </div>
    <hr>

    <!-- Query each product order -->
    <div class="row d-flex justify-content-between">
        <div class="col">
            $tradeName<br>
            $ProductName
        </div>

        <div class="col-md-auto d-flex justify-content-end">
            x $Quantity
        </div>
        <div class="col-md-auto d-flex justify-content-end">
            PHP $Price
        </div>
        <div class="col col-lg-3 d-flex justify-content-end">
            PHP $total
        </div>
    </div>
    <br>


    <!--  -->
    <hr>
    <div class="row d-flex justify-content-between">
        <div class="col">
            $TotalPrice
        </div>
        <div class="col-4 d-flex justify-content-end">
            <b>$PHP 25,600.00</b>
        </div>
    </div>
</div>