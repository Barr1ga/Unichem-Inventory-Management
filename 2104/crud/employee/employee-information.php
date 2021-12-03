<?php 
    include('../crud/db_connect.php');

    if (isset($_GET['userID'])) {
        $userID = $_GET['userID'];
        
        if(isset($userID)){
            $getEmployeeInformation = "SELECT * 
                                        FROM inventory_users
                                        WHERE userID=$userID";

            if ($result = mysqli_query($conn, $getEmployeeInformation))
                $user = mysqli_fetch_assoc($result);
        } 
    }
?>













