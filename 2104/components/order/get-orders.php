<div class="col-md-6">
    <label class="col-form-label">Product</label>
    <input class="form-control" name="product[]" value="<?php echo $orders['tradeName']?>" readonly/>
</div>

<div class="col-md-6">
    <label class="col-form-label">Quantity</label>
    <input type="text" class="form-control" name="quantity[]" value="<?php echo $orders['quantity'] ?>" readonly/>
</div>