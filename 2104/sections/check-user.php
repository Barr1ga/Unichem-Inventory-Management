<?php 
    include('../crud/db_connect.php');
    switch($_POST['user']){
        case "login":
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

        
                $checkuser = "SELECT * FROM `inventory_users` 
                                WHERE `userName`='$username'
                                AND `email`='$email'
                                AND `password`='$password'
                                LIMIT 1";

                $result = mysqli_query($conn, $checkuser);


                if (mysqli_num_rows($result) != 0) {
                    
                    $user = mysqli_fetch_assoc($result);
                       echo "succh";
                       session_start();
                    
                        $SESSION['userType'] = $user['userType'];
                        $SESSION['userFirstName'] = $user['userFirstName'];
                        $SESSION['userLastName'] = $user['userLastName'];
                        $SESSION['userName'] = $user['userName'];
                        $SESSION['email'] = $user['email'];
                        $SESSION['password'] = $user['password'];

                        echo $SESSION['email'];

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
                $password = $_POST['password'];
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












