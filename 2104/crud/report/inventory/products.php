<?php
include('../crud/db_connect.php');

$query = "SELECT productID, tradeName, inStock from product";

$exec = mysqli_query($conn, $query);


?>



