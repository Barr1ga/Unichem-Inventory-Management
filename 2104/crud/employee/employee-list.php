<?php 
    include('../crud/db_connect.php');
    
    $getEmployeeList = "SELECT * FROM inventory_users";

    $result = mysqli_query($conn, $getEmployeeList);
    echo "
            <div class=''>
            Employee List<br><br>
            <div class='scroll-list-2'>
            ";
    if (mysqli_num_rows($result) > 0) {
        
        while ($user = mysqli_fetch_assoc($result)) {
            
            include('../components/employee/employee-list.php');
            
            
        }  
        
    }else{
        echo "<div class ='empty-list empty-message'>There are no employees.</div>";
    }
    echo "
        </div>
        </div>
    ";

    
?>













