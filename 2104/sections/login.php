<?php
include('../style/import.php');

?>

<!-- USER ACCOUNT 
van@gmail.com
van123
-->

<!-- MANAGER ACCOUNT
marge@gmail.com
marge123
-->

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
                
                <h3>Welcome to Unichem</h3>
            </div>
            <br><br>
            <form method="post" action="check-user.php">
                <input type="hidden" name="user" value="login">
                
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
                    <button class="btn btn-primary btn-block" type="submit" value="submit">Log In </button>
                </div> 
            </form>
        </div>
            
    </div>
    
</body>

</html>
