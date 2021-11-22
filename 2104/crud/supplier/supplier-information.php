<?php 
    include('../crud/db_connect.php');

    $supplierID = $_GET['supplierID'];
    
    $getSupplierInformation = "SELECT * 
                                FROM supplier c, supplier_address ca
                                WHERE c.supplierID=$supplierID 
                                AND ca.supplierID=$supplierID";

    $result = mysqli_query($conn, $getSupplierInformation);
    
    $supplier = mysqli_fetch_assoc($result);

      
    


   
    

    
?>













