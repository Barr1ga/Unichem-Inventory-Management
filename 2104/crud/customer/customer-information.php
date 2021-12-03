<?php 
    include('../crud/db_connect.php');

    if (isset($_GET['customerID'])) {
        $customerID = $_GET['customerID'];
    }
    
    if(isset($customerID)){
        $getCustomerInformation = "SELECT * 
                                    FROM customer c, customer_address ca
                                    WHERE c.customerID=$customerID 
                                    AND ca.customerID=$customerID";

        if ($result = mysqli_query($conn, $getCustomerInformation)) {
            $customer = mysqli_fetch_assoc($result);
        }
    }  
?>













