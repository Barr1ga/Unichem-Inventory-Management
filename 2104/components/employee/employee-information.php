
<div class="container white-box-container customer-supplier-information round-edge">
    <div class="row">
        <div class="col">
            <h4><b>#<?php echo $user['userID']; ?></b></h3>
        </div>
        <div class="col d-flex justify-content-end">
            <!-- <form method="get" action="../sections/employee-update.php">
                <input type="hidden" name="userID" value="<?php echo $user['userID']; ?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form> -->

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Update
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Update Employee <?php echo $user['userID']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php include('employee-update.php');?>
                    </div>
                    <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" value="submit">Update</button>
                            
                        </form>
                    </div>
                    </div>
                </div>
            </div>

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
            
        </div>
        <div class="col-8">
            <b>
                <?php echo
                $user['userType']."<br>".
                $user['userName']."<br>".
                $user['userFirstName']."<br>".
                $user['userLastName']."<br>".
                $user['email']."<br>";
                ?>
            </b>
        </div>

    </div>
   

</div>