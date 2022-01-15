<?php
session_start();

if (isset($_SESSION)) {
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

    <title>UniChem - Log In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css?v=<?php echo time(); ?>">

</head>

<body class="text-center">
    <main class="form-signin border shadow">
        <form method="post" action="crud/login.php"  > 
            <img class="mb-4" src="assets/images/Unichem-Logo-Text.svg" alt="" width="200" height="100" />
            <input type="hidden" name="user" value="login">
            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="Email Address"  required/>
                <label for="floatingInput">Email address</label>
            </div>
            
            <div class="form-floating mt-2">
                <input type="password" class="form-control" name="password" placeholder="Password" required/>
                <label for="floatingPassword">Password</label>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary" type="submit">
                Log in
            </button>

            <?php
            if (isset($_SESSION['msg'])) {
                echo "<div class = 'mt-2 text-center text-danger'>" . $_SESSION['msg'] . "</div>";
                unset($_SESSION['msg']);
            }
            ?>

            <p class="mt-5 mb-3 text-muted">&copy; 2021 UniChem Co.</p>
        </form>
    </main>
</body>

</html>