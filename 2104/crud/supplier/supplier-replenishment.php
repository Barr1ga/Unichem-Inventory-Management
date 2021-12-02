<?php 
    include('../crud/db_connect.php');

    if(isset($supplierID)){
        $getSupplierOrderInformation = "SELECT * 
                                        FROM replenishment
                                        WHERE supplierID=$supplierID";

            $result2 = mysqli_query($conn, $getSupplierOrderInformation);
            
            
            if (mysqli_num_rows($result2) > 0) {

                while ($Replenishment = mysqli_fetch_assoc($result2)) {
                    
                    $createdByID = $Replenishment['createdBy'];
                    $createdByquery = "SELECT * 
                                FROM inventory_users
                                WHERE userID=$createdByID LIMIT 1";
                    $resultC = mysqli_query($conn, $createdByquery);
                    $createdBy = mysqli_fetch_assoc($resultC);
                    
                    if($Replenishment['approvedBy'] != NULL) {
                        $approvedByID = $Replenishment['approvedBy'];
                        $approvedByquery = "SELECT * 
                                    FROM inventory_users
                                    WHERE userID=$approvedByID LIMIT 1";
                        $resultA = mysqli_query($conn, $approvedByquery);
                        $approvedBy = mysqli_fetch_assoc($resultA);
                    }
                    include('../components/supplier/supplier-replenishment-details.php');
                }  
                
            }
    }else{
        echo "<div class ='empty-list empty-message'>There are no Suppliers.</div>";
    }
    


     
    // <?php 
    // include('../crud/db_connect.php');

    // $getSupplierOrderInformation = "SELECT * 
    //                             FROM replenishment
    //                             WHERE supplierID=$supplierID";

    // $result2 = mysqli_query($conn, $getSupplierOrderInformation);
    
    
    // if (mysqli_num_rows($result2) > 0) {

    //     while ($Replenishment = mysqli_fetch_assoc($result2)) {
            
    //         $createdByID = $Replenishment['createdBy'];
    //         $approvedByID = $Replenishment['approvedBy'];

    //         $createdByquery = "SELECT * 
    //                     FROM inventory_users
    //                     WHERE userID=$createdByID LIMIT 1";

    //         $approvedByquery = "SELECT * 
    //                     FROM inventory_users
    //                     WHERE userID=$approvedByID LIMIT 1";

    //         $resultC = mysqli_query($conn, $createdByquery);
    //         $resultA = mysqli_query($conn, $approvedByquery);

    //         $createdBy = mysqli_fetch_assoc($resultC);
    //         $approvedBy = mysqli_fetch_assoc($resultA);
            
    //         include('../components/supplier/supplier-replenishment-details.php');

    //     }  
        
    // }


