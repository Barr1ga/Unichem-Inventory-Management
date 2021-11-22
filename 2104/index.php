<?php
include "style/import.php";
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unichem - Login</title>
</head>

<body style="display:flex">

    <div class="form-signin border shadow bg-white rounded-lg">
        <form method="post">
            <h1 class="h4 mb-4 fw-normal text-center">UniChem</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <label>Username</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Pin" required>
                <label>Password</label>
            </div>

            <button type="submit" class="w-100 mt-2 btn btn-lg btn-primary" name="submit">Log in</button>

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