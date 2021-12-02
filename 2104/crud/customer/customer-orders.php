<?php 
    include('../crud/db_connect.php');

    if(isset($customerID)){
        $getCustomerOrderInformation = "SELECT * 
                                FROM orders o, inventory_users iu
                                WHERE o.customerID=$customerID";

        $result2 = mysqli_query($conn, $getCustomerOrderInformation);
        
        
        if (mysqli_num_rows($result) > 0) {

            while ($Order = mysqli_fetch_assoc($result2)) {

                $createdByID = $Order['createdBy'];
                $createdByquery = "SELECT * 
                            FROM inventory_users
                            WHERE userID=$createdByID LIMIT 1";
                $resultC = mysqli_query($conn, $createdByquery);
                $createdBy = mysqli_fetch_assoc($resultC);
                
                if($Order['approvedBy'] != NULL) {
                    $approvedByID = $Order['approvedBy'];
                    $approvedByquery = "SELECT * 
                                FROM inventory_users
                                WHERE userID=$approvedByID LIMIT 1";
                    $resultA = mysqli_query($conn, $approvedByquery);
                    $approvedBy = mysqli_fetch_assoc($resultA);
                }
                    
                include('../components/customer/customer-order-details.php');

            }
            
        }else {
            echo "<div class ='empty-list empty-message'>This customer has no orders</div>";
        }
    }else{
        echo "<div class ='empty-list empty-message'>There are no Suppliers.</div>";
    }













    


     
  


