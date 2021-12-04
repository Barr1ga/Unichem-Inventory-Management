<?php 
    include('../crud/db_connect.php');
    
    $getEmployeeList = "SELECT * FROM inventory_users WHERE userType='User'";

    $result = mysqli_query($conn, $getEmployeeList);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
            <div class=''>
            <h6>Employee List</h6>
                        <br>
            <div class='scroll-list-2'>
            ";
        while ($user = mysqli_fetch_assoc($result)) {
            
            include('../components/employee/employee-list.php');
            
            
        }  
        echo "
            </div>
            </div>
        ";
    }else{
        echo "<div class ='empty-list empty-message'>There are no employees.</div>";
    }
    

    
?>













