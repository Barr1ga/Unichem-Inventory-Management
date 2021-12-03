<?php
include('../crud/db_connect.php');

$query = "SELECT orderStatus, COUNT(*) AS Quantity FROM `orders` GROUP BY orderStatus";

$exec = mysqli_query($conn, $query);


