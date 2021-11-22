<?php 
    $SupplierID = "1002";
    $CreatedBy = "Nikolai Tumapon";
    $ApprovedBy = "Van AJ Vanguardia";
    $DateShipped = "mm/dd/yy";

?>

<div class="scroll-list-2">
<div class="to-confirm white-box-container-details-card-status bg-secondary mt-1 ">Shipping</div>
    <div class="white-box-container-details-card-body rounded">
        <div class="row d-flex justify-content-between">
            <div class="col">
                <h5><b>$ProductID</b></h5>
            </div>
            <div class="col-md-auto">
                $OrderDate
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 col-md-4">
                Supplier ID<br>
                Created By<br>
                Approved By<br>
                Date Shipped
            </div>
            <div class="col-12 col-sm-6 col-md-8">
                <b>
                    <?php
                        echo $SupplierID."<br>";
                        echo $CreatedBy."<br>";
                        echo $ApprovedBy."<br>";
                        echo $DateShipped;
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
    
</div>