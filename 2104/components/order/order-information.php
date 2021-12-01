<div class="<?php echo $order['orderStatus']; ?> white-box-container-details-card-status"><?php echo $order['orderStatus']; ?></div>
<div class="white-box-container-details-card-body rounded">
    <div class="row d-flex justify-content-between">
        <div class="col">
            <h5><b># <?php echo $order['orderlineID'] ?></b></h5>
        </div>
        <div class="col-md-auto">
            <?php echo $order['orderDate'] ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-6 col-md-4">
            Customer Name <br>
            Created By<br>
            Approved By<br>
            Date Shipped
        </div>
        <div class="col-12 col-sm-6 col-md-8">
            <b>
                <?php
                echo $order['customerFName']. " ". $order['customerLName']. "<br>";
                echo $createdBy['userFirstName']. " ". $createdBy['userLastName']. "<br>";
                if ($approvedByResult) {
                    echo $approvedBy['userFirstName'] . " ". $approvedBy['userLastName']."<br>";
                } else {
                    echo "To-Approve". "<br>";
                }
                echo $order['shipRequiredDate'];
                ?>
            </b>
        </div>
    </div>
    <hr>
    <div class="row d-flex justify-content-between">
        <div class="col">
            <?php echo $order['productID']; ?>#
            <?php echo $order['tradeName']; ?>
        </div>

        <div class="col-md-auto d-flex justify-content-end">
            x <?php echo $order['quantity']; ?>
        </div>
        <div class="col-md-auto d-flex justify-content-end">
            ₱ <?php echo $order['price']; ?>
        </div>
    </div>
    
    <hr>
    <div class="row d-flex justify-content-between">
        <div class="col">
            Total Price
        </div>
        <div class="col-4 d-flex justify-content-end">
            <b>₱ <?php echo $order['quantity'] * $order['price'] ?></b>
        </div>
    </div>
</div>