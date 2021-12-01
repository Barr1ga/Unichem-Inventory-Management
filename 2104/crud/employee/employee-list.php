<?php 
    include('../crud/db_connect.php');
    
    $getEmployeeList = "SELECT * FROM inventory_users";

    $result = mysqli_query($conn, $getEmployeeList);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
            <div class=''>
            Employee List<br><br>
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
        echo "There are no users in the database";
    }


    
?>













