<?php 
    include('../crud/db_connect.php');

    if(isset($supplierID)){
        $supplierID = $_GET['supplierID'];
        $getSupplierInformation = "SELECT * 
                                FROM supplier c, supplier_address ca
                                WHERE c.supplierID=$supplierID 
                                AND ca.supplierID=$supplierID";

        if ($result = mysqli_query($conn, $getSupplierInformation)) {
            $supplier = mysqli_fetch_assoc($result);
        }
    }else{
        // echo "<div class ='empty-message'>There are no Suppliers.</div>";
    }
    
   
    

    
?>













