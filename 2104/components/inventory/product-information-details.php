<?php include('../style/import.php'); ?>



<div class="container white-box-container-prod-info">

    <div class="row d-flex justify-content-between">
        <div class="col-md-auto">
        <img src="<?php echo $inventory["productImage"]; ?>" width="105.78" height="102.54" alt="..." style="border-radius: 10px 10px 10px 10px;">

        </div>
        <div class="col align-self-center">
                <h4><b><?php echo $inventory["productID"];?></b></h3>
                <div class="Trade-Name"><?php echo $inventory["tradeName"];?></div>
        </div>
        
        <div class="col-md-auto">
            <button class="update">Update</button>
        </div>
        <div class="col-md-auto">
            <button class="delete">Delete</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
        <?php echo $inventory["description"];?>
        </div>
    </div>
    <br>
    <div class="row d-flex justify-content-between">
        <div class="col">
        
        BrandName<br>
        Date Contained<br>
        Price<br>
        Application Type<br>
        Cure Time<br>
        color<br>
        form<br>
        packageType<br>
        MaxOperatingTemp<br>
        MinOperatingTemp<br>
        Viscosity<br>
        ChemicalComposition<br>
        OperatingTempRange<br>
        
        </div>
        <div class="col">
        <b>
        
        <?php echo $inventory["brandName"];?><br>
        <?php echo $inventory["dateContained"];?><br>
        <?php echo $inventory["price"];?><br>
        <?php echo $inventory["productID"];?><br>
        <?php echo $inventory["applicationType"];?><br>
        <?php echo $inventory["color"];?><br>
        <?php echo $inventory["form"];?><br>
        <?php echo $inventory["packageType"];?><br>
        <?php echo $inventory["maxOperatingTemp"];?><br>
        <?php echo $inventory["minOperatingTemp"];?><br>
        <?php echo $inventory["viscosity"];?><br>
        <?php echo $inventory["chemicalComposition"];?><br>
        <?php echo $inventory["operatingTempRange"];?>
        
        </b>
        </div>
    </div>
</div>