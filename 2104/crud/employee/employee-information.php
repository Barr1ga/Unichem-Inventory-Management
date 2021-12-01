<?php 
    include('../crud/db_connect.php');

    $userID = $_GET['userID'];
    
    $getEmployeeInformation = "SELECT * 
                                FROM inventory_users
                                WHERE userID=$userID";

    $result = mysqli_query($conn, $getEmployeeInformation);
    
    $user = mysqli_fetch_assoc($result);

      
    


   
    

    
?>













