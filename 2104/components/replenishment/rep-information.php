<div class="<?php echo $rep['orderStatus']; ?> white-box-container-details-card-status"><?php echo $rep['orderStatus']; ?></div>
<div class="white-box-container-details-card-body rounded">
    <div class="row d-flex justify-content-between">
        <div class="col">
            <h5><b># <?php echo $rep['replenishmentLineID'] ?></b></h5>
        </div>
        <div class="col-md-auto">
        <?php echo $rep['repOrderDate'] ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6 col-md-4">
            Supplier Name<br>
            Created By<br>
            Approved By<br>
            Date Shipped
        </div>
        <div class="col-12 col-sm-6 col-md-8">
            <b>
            <?php
                echo "Supplier Name" . "<br>";
                // echo $CreatedBy['userFirstName']. $CreatedBy['userLastName'] ."<br>";
                echo $rep['createdBy'] . "<br>";

                // echo $ApprovedBy['userFirstName']."<br>";
                echo $rep['approvedBy'] . "<br>";
                echo $rep['shipRequiredDate'];
                ?>
            </b>
        </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-between">
        <div class="col">
            <?php echo $rep['productID']; ?>#
            <?php echo $rep['tradeName']; ?>
        </div>

        <div class="col-md-auto d-flex justify-content-end">
            x <?php echo $rep['quantity']; ?>
        </div>
        <div class="col-md-auto d-flex justify-content-end">
            ₱ <?php echo $rep['price']; ?>
        </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-between">
        <div class="col">
            $TotalPrice
        </div>
        <div class="col-4 d-flex justify-content-end">
            <b>₱ <?php echo $rep['quantity'] * $rep['price'] ?></b>
        </div>
    </div>
</div>