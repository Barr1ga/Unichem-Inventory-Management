<?php 
    include('../crud/db_connect.php');

    $getCustomerOrderInformation = "SELECT * 
                                FROM orders o, inventory_users iu
                                WHERE o.customerID=$customerID";

    $result2 = mysqli_query($conn, $getCustomerOrderInformation);
    
    
    if (mysqli_num_rows($result) > 0) {

        while ($Order = mysqli_fetch_assoc($result2)) {

            $createdByID = $Order['createdBy'];
            $approvedByID = $Order['approvedBy'];

            $createdByquery = "SELECT * 
                        FROM inventory_users
                        WHERE userID=$createdByID LIMIT 1";

            $approvedByquery = "SELECT * 
                        FROM inventory_users
                        WHERE userID=$approvedByID LIMIT 1";

            $resultC = mysqli_query($conn, $createdByquery);
            $resultA = mysqli_query($conn, $approvedByquery);

            $createdBy = mysqli_fetch_assoc($resultC);
            $approvedBy = mysqli_fetch_assoc($resultA);
            
            include('../components/customer/customer-order-details.php');

        }  
        
    }


     
  


