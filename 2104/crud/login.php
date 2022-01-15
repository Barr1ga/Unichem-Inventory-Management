<?php
session_start();
include('../crud/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['email'];
    $password = $_POST['password'];


    $checkuser = "SELECT * 
                    FROM `inventory_users`
                    WHERE `email`= (?)
                    LIMIT 1";
                                    
    if ($stmt = $conn->prepare($checkuser)) {
        $stmt->bind_param('s', $email);

        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
        
                $_SESSION['userID'] = $user['userID'];
                $_SESSION['userType'] = $user['userType'];
                $_SESSION['userName'] = $user['userName'];
            
                header("Location: ../sections/notifications.php");
            } 
        }
        else {
            header("Location: ../index.php");
            $_SESSION['msg'] = "Invalid Email or Password";
        }
        
    } else {
        header("Location: ../index.php");
        $_SESSION['msg'] = "Invalid Email or Password";
    }
} else {
    header("Location: ../index.php");
}

?>

