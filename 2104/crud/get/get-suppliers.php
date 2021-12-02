<?php

include('../crud/db_connect.php');

$sql = "SELECT * FROM supplier";
$result = mysqli_query($conn,$sql);

?>