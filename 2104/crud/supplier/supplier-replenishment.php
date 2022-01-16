<?php 
    include('../crud/db_connect.php');

    if(isset($supplierID)){

        $getSupplierOrderInformation = "SELECT * 
                                        FROM replenishment
                                        WHERE supplierID=?";

            $stmt = $conn->prepare($getSupplierOrderInformation);
            $stmt->bind_param("i", $supplierID);
            $stmt->execute();
    
            $result2 = $stmt->get_result();
                    
            if ($result2->num_rows > 0) {
                echo "<div class='scroll-list-2'>";
                while ($Replenishment = $result2->fetch_assoc()) {
                    
                    
                    $createdByquery = "SELECT * 
                                FROM inventory_users
                                WHERE userID=? LIMIT 1";
                    $stmtCB = $conn->prepare($createdByquery);
                    $stmtCB->bind_param("i", $createdByID);
                    $createdByID = $Replenishment['createdBy'];
                    $stmtCB->execute();
                    
                    $resultC = $stmtCB->get_result();
                    $createdBy = $resultC->fetch_assoc();
                    
                    if($Replenishment['approvedBy'] != NULL) {
                        
                        $approvedByquery = "SELECT * 
                                    FROM inventory_users
                                    WHERE userID=? LIMIT 1";
                        $stmtAB = $conn->prepare($approvedByquery);
                        $stmtAB->bind_param("i", $approvedByID);
                        $approvedByID = $Replenishment['approvedBy'];
                        $stmtAB->execute();
                        
                        $resultA = $stmtAB->get_result();
                        $approvedBy = $resultA->fetch_assoc();
                    }
                    include('../components/supplier/supplier-replenishment-details.php');
                }  
                echo "</div>";
                
                echo "<div class ='empty-list empty-message'></div>";
                
            }
    }else{
        echo "<div class ='empty-list empty-message'></div>";
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


