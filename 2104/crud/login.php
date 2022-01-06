<?php
session_start();
include('../crud/db_connect.php');

$email = $_POST['email'];
$password = $_POST['password'];


$checkuser = "SELECT * FROM `inventory_users`
                                WHERE `email`='$email'
                                LIMIT 1";

$result = mysqli_query($conn, $checkuser);

$user = mysqli_fetch_assoc($result);

if (password_verify($password, $user['password'])) {

    $_SESSION['userID'] = $user['userID'];
    $_SESSION['userType'] = $user['userType'];
    $_SESSION['userFirstName'] = $user['userFirstName'];
    $_SESSION['userLastName'] = $user['userLastName'];
    $_SESSION['userName'] = $user['userName'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['password'] = $user['password'];

    echo $_SESSION['email'];

    header("Location: ../sections/notifications.php");
} else {
    header("Location: ../index.php");
    $_SESSION['msg'] = "Invalid Email or Password";
}
?>