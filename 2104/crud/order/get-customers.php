<?php

include('../crud/db_connect.php');

$sql = "SELECT * FROM customer";
$rs = mysqli_query($conn,$sql);


?>