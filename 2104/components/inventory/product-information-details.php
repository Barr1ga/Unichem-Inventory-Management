<?php include('../style/import.php'); ?>



<div class="container white-box-container-prod-info">

    <div class="row d-flex justify-content-between">
        <div class="col-md-auto">
        <img src="../assets/<?php echo $inventory["productImage"]; ?>" width="105.78" height="102.54" alt="..." style="border-radius: 10px 10px 10px 10px;">

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
        <div class="row">
            <div class="col">Date Contained</div>    <div class="col"><b><?php echo $inventory["dateContained"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Price</div>    <div class="col"><b><?php echo $inventory["price"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Application Type</div>    <div class="col"><b><?php echo $inventory["applicationType"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Cure Time</div>    <div class="col"><b><?php echo $inventory["cureTime"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Color</div>    <div class="col"><b><?php echo $inventory["color"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Form</div>    <div class="col"><b><?php echo $inventory["form"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Package Type</div>    <div class="col"><b><?php echo $inventory["packageType"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Package Size</div>    <div class="col"><b><?php echo $inventory["packageSize"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Min Operating Temp</div>    <div class="col"><b><?php echo $inventory["minOperatingTemp"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Max Operating Temp</div>    <div class="col"><b><?php echo $inventory["maxOperatingTemp"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Viscosity</div>    <div class="col"><b><?php echo $inventory["viscosity"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Chemical Composition</div>    <div class="col"><b><?php echo $inventory["chemicalComposition"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">Operating Temp Range</div>    <div class="col"><b><?php echo $inventory["operatingTempRange"];?></b></div><br>
        </div>
        <div class="row">
            <div class="col">In Stock</div>    <div class="col"><b><?php echo $inventory["inStock"];?></b></div><br>
        </div>

    </div>
</div>