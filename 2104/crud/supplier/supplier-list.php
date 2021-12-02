<?php 
    include('../crud/db_connect.php');
    
    $getSupplierList = "SELECT * FROM supplier";

    $result = mysqli_query($conn, $getSupplierList);
    echo "
            <div class=''>
            Supplier List<br><br>
            <div class='scroll-list'>
            ";
    if (mysqli_num_rows($result) > 0) {
        
        while ($Supplier = mysqli_fetch_assoc($result)) {
            
                include('../components/supplier/supplier-list.php');
            
            
        }  
        
    }else{
        echo "<div class ='empty-list empty-message'>There are no Suppliers.</div>";
    }
    echo "
    </div>
    </div>
";

    
?>













