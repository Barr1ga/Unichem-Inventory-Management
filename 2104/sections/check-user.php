<?php 
    include('../crud/db_connect.php');
    switch($_POST['user']){
        case "login":
                $email = $_POST['email'];
                $password = $_POST['password'];

        
                $checkuser = "SELECT * FROM `inventory_users`
                                WHERE `email`='$email'
                                LIMIT 1";

                $result = mysqli_query($conn, $checkuser);

                $user = mysqli_fetch_assoc($result);

                if (password_verify($password,$user['password'])){


                       echo "succh";
                       session_start();
                    
                        $_SESSION['userType'] = $user['userType'];
                        $_SESSION['userFirstName'] = $user['userFirstName'];
                        $_SESSION['userLastName'] = $user['userLastName'];
                        $_SESSION['userName'] = $user['userName'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['password'] = $user['password'];

                        echo $_SESSION['email'];

                        header("Location: notifications.php");
                    

                    
                }else{
                    header("Location: login.php");
                }
                    
               break;

            case "register":

                $userName = $_POST['userName'];
                $userFirstName = $_POST['userFirstName'];
                $userLastName = $_POST['userLastName'];
                $email = $_POST['email'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $userType = $_POST['userType'];
                


                $checkuser = "SELECT * FROM `inventory_users` 
                                WHERE `userName`='$userName'
                                AND `email`='$email'
                                LIMIT 1";

                $result = mysqli_query($conn, $checkuser);

                if (mysqli_num_rows($result) == 0) {
                    
                    $insertUser = "INSERT INTO `inventory_users`(`userID`, `userType`, `userFirstName`, `userLastName`, `userName`, `email`, `password`)
                    VALUES ('','$userName','$userType','$userFirstName','$userLastName','$email','$password')";
            
                    if (mysqli_query($conn, $insertUser)) {
                        echo "Created successfully";
                        header("Location: login.php");
                    } else {
                        echo "Error creating user: " . mysqli_error($conn);
                    } 
                }else{
                    header("Location: register.php");
                }
    }
    

   
    

    
?>












