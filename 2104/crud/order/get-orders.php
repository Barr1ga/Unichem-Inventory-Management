<?php
include('../crud/db_connect.php');

$id = $order['orderID'];

$sql = "SELECT *
        FROM
            orders o
        JOIN order_line ol ON
            ol.orderID = o.orderID
        JOIN product p ON
            p.productID = ol.productID
        WHERE o.orderID = $id;";

$rs = mysqli_query($conn, $sql);

if (mysqli_num_rows($rs) > 0) {
    while ($prod = mysqli_fetch_assoc($rs)) {
        include('../components/order/get-orders.php');
    } 
}

?>