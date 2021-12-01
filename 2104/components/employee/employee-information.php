
<div class="container white-box-container customer-supplier-information round-edge">
    <div class="row">
        <div class="col">
            <h4><b><?php echo $user['userID']; ?></b></h3>
        </div>
        <div class="col d-flex justify-content-end">
            <form method="get" action="../sections/employee-update.php">
                <input type="hidden" name="userID" value="<?php echo $user['userID']; ?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            User Type<br>
            Username<br>
            First Name<br>
            Last Name<br>
            Email Address<br>
            Password
            
        </div>
        <div class="col-8">
            <b>
                <?php echo
                $user['userType']."<br>".
                $user['userName']."<br>".
                $user['userFirstName']."<br>".
                $user['userLastName']."<br>".
                $user['email']."<br>".
                $user['password'];
                ?>
            </b>
        </div>

    </div>
   

</div>