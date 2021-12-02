    <div class="row d-flex justify-content-between">
        <div class="col">
            <?php echo $ReplenishmentLine['productID']; ?>#
            <?php echo $ReplenishmentLine['tradeName']; ?>
        </div>

        <div class="col-md-auto d-flex justify-content-end">
            x <?php echo $ReplenishmentLine['quantity']; ?>
        </div>
        <div class="col-md-auto d-flex justify-content-end">
            P <?php echo $ReplenishmentLine['price']; ?>
        </div>
        <div class="col col-lg-3 d-flex justify-content-end">
            <b>P <?php $totalEach = $ReplenishmentLine['quantity'] * $ReplenishmentLine['price']; 
                echo $totalEach;
            ?> </b>
        </div>
    </div>