<?php
session_start();
include "style/import.php";

if(isset($_SESSION)){
    session_destroy();
}

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

    <title>Unichem - Login</title>
</head>

<body style="display:flex">

    <div class="form-signin border shadow bg-white">
        <form method="post" action="crud/login.php">
            <div class="row justify-content-md-center">
                <img class="unichem-logo-login" src="assets/images/Unichem-Logo-Text.svg">
            </div>
            &nbsp
            <input type="hidden" name="user" value="login">

            <div class="form-floating">
                <input type="text" class="form-control" name="email" placeholder="Email Address" required>
                <label>Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label>Password</label>
            </div>

            <button type="submit" class="w-100 mt-2 btn btn-lg btn-primary">Log in</button>

            <!-- optional for error message -->
            <?php
            if (isset($_SESSION['msg'])) {
                echo "<div class = 'mt-2 text-center text-danger'>" . $_SESSION['msg'] . "</div>";
                unset($_SESSION['msg']);
            }
            ?>

        </form>
    </div>

</body>

</html>