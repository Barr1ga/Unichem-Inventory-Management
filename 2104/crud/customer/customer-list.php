<?php 
    include('../crud/db_connect.php');
    
    $getCustomerList = "SELECT * FROM customer";

    $result = mysqli_query($conn, $getCustomerList);
    
    
    if (mysqli_num_rows($result) > 0) {
        echo "
            <div class=''>
            Customer List<br><br>
            <div class='scroll-list-2'>
            ";
        while ($customer = mysqli_fetch_assoc($result)) {
            
            include('../components/customer/customer-list.php');
            
            
        }  
        echo "
        </div>
        </div>";
        
    }else{
        echo "<div class ='empty-list empty-message'>There are no Customers.</div>";
    }

    
?>













