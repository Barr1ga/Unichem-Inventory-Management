    <div class="row d-flex justify-content-between">
        <div class="col">
            <?php echo $OrderLine['productID']; ?>#
            <?php echo $OrderLine['tradeName']; ?>
        </div>

        <div class="col-md-auto d-flex justify-content-end">
            x <?php echo $OrderLine['quantity']; ?>
        </div>
        <div class="col-md-auto d-flex justify-content-end">
            $ <?php echo $OrderLine['price']; ?>
        </div>
        <div class="col col-lg-3 d-flex justify-content-end">
            <b>$ <?php $totalEach = $OrderLine['quantity'] * $OrderLine['price']; 
                echo $totalEach;
            ?> </b>
        </div>
    </div>