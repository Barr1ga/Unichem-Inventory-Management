<?php
include('../style/import.php');
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unichem</title>
</head>
<!-- bayor -->
<body>
    <div class="d-flex justify-content-center align-item-center">
        <div class="container white-box-container round-edge reg-log-form">
            <br><br>
            <div class="d-flex justify-content-center">
                <h3>Registration Form</h3>
            </div>
            <br><br>
            <form method="post" action="check-user.php">
                <input type="hidden" name="user" value="register">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input class="form-control" type="text" name="userName" required>
                </div>  
                <div class="mb-3">
                    <label for="username" class="form-label">First Name</label>
                    <input class="form-control" type="text" name="userFirstName" required>
                </div>  
                <div class="mb-3">
                    <label for="username" class="form-label">Last Name</label>
                    <input class="form-control" type="text" name="userLastName" required>
                </div>  
                <div class="mb-3">
                    <label for="userType" class="form-label">UserType</label>
                    <select name="userType" id="inputState" class="form-select">
                        <option value="Manager">Manager</option>
                        <option value="User">User</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" required>
                </div> 
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input class="form-control" type="password" name="password" required>
                </div> 
                <div class="mb-3">
                    <br>
                    <button class="btn btn-primary btn-block" style="width: 100%;" type="submit" value="submit">Register </button>
                </div> 
            </form>
            <div class="d-flex justify-content-center">
                Already have an account? <a href="login.php"><b>Log In</b></a>
            </div>
        </div>
            
    </div>
    
</body>

</html>