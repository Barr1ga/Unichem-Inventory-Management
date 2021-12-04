<?php 
    include('../crud/db_connect.php');
    
    $getSupplierList = "SELECT * FROM supplier";

    $result = mysqli_query($conn, $getSupplierList);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
            <div class=''>
            <h6>Supplier List</h6>
                        <br>
            <div class='scroll-list'>
            ";
        while ($Supplier = mysqli_fetch_assoc($result)) {
            
                include('../components/supplier/supplier-list.php');
            
            
        }  
        echo "
            </div>
            </div>
        ";
    }else{
        echo "<div class ='empty-list empty-message'>There are no Suppliers.</div>";
    }
