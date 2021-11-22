<?php 
    include('../crud/db_connect.php');
    
    $getCustomerList = "SELECT * FROM customer";

    $result = mysqli_query($conn, $getCustomerList);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
            <div class=''>
            Customer List<br><br>
            <div class='scroll-list'>
            ";
        while ($customer = mysqli_fetch_assoc($result)) {
            
            include('../components/customer/customer-list.php');
            
            
        }  
        echo "
            </div>
            </div>
        ";
    }else{
        echo "There are no customers in the database";
    }


    
?>













