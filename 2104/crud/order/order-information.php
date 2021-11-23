<?php 
    include('../crud/db_connect.php');

    $customerID = $_GET['customerID'];
    
    $getCustomerInformation = "SELECT * 
                                FROM customer c, customer_address ca
                                WHERE c.customerID=$customerID 
                                AND ca.customerID=$customerID";

    $result = mysqli_query($conn, $getCustomerInformation);
    
    $customer = mysqli_fetch_assoc($result);

      
    


   
    

    
?>













