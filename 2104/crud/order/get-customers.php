<?php

include('../crud/db_connect.php');

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn,$sql);

?>