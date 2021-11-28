<?php

include('../crud/db_connect.php');

$sql = "SELECT * FROM product WHERE inStock > 0";
$result = mysqli_query($conn,$sql);


?>