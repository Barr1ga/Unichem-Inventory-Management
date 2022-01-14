<?php
session_start();
include('../crud/db_connect.php');

$email = $_POST['email'];
$password = $_POST['password'];


$checkuser = "SELECT * FROM `inventory_users`
                                WHERE `email`= (?)
                                LIMIT 1";
                                
$stmt = $conn->prepare($checkuser);
$stmt->bind_param('s', $email);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {

        $_SESSION['userID'] = $user['userID'];
        $_SESSION['userType'] = $user['userType'];
        // $_SESSION['userFirstName'] = $user['userFirstName'];
        // $_SESSION['userLastName'] = $user['userLastName'];
        // $_SESSION['userName'] = $user['userName'];
        // $_SESSION['email'] = $user['email'];
        // $_SESSION['password'] = $user['password'];
    
        header("Location: ../sections/notifications.php");
    } 
}
else {
    header("Location: ../index.php");
    $_SESSION['msg'] = "Invalid Email or Password";
}


?>