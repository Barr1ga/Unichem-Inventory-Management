<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "info_mngmnt_db";
$conn=mysqli_connect($host, $user, $pass, $name);

$result = mysqli_query($conn, "SELECT *
FROM (SELECT COUNT(repOrderID) AS repOrderCount, repOrderDate FROM replenishment GROUP BY EXTRACT(month FROM repOrderDate))A
CROSS JOIN (SELECT COUNT(orderID) AS orderCount, orderDate FROM orders GROUP BY EXTRACT(month FROM orderDate))B")

?>