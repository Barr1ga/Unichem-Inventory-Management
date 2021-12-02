<?php
include('../crud/db_connect.php');

if (isset($_GET['orderID'])) {
    $orderID = $_GET['orderID'];
    $total = 0;

    $getOrderInformation = "SELECT *, SUM(ol.quantity * p.price) as 'Total' 
                                FROM orders o
                                JOIN order_line ol ON ol.orderID = o.orderID
                                JOIN product p ON ol.productID = p.productID
                                JOIN customer c on c.customerID = o.customerID
                                WHERE ol.orderID = $orderID
                                GROUP BY o.orderID";

    $getOrderLine = "SELECT *
                        FROM orders o
                        JOIN order_line ol ON ol.orderID = o.orderID
                        JOIN product p ON ol.productID = p.productID
                        JOIN customer c on c.customerID = o.customerID
                        WHERE ol.orderID = $orderID
                        GROUP BY ol.orderlineID";

    $result1 = mysqli_query($conn, $getOrderInformation);
    $result2 = mysqli_query($conn, $getOrderLine );

    if (mysqli_num_rows($result) > 0) {
        echo "<div class='scroll-list-2'>";
        if ($order = mysqli_fetch_assoc($result1)) {

            $createdByID = $order['createdBy'];
            $approvedByID = $order['approvedBy'];

            $createdByquery = "SELECT * 
                            FROM inventory_users
                            WHERE userID=$createdByID LIMIT 1";

            $approvedByquery = "SELECT * 
                            FROM inventory_users
                            WHERE userID=$approvedByID LIMIT 1";

            $createdByResult = mysqli_query($conn, $createdByquery);
            $approvedByResult = mysqli_query($conn, $approvedByquery);

            $createdBy = mysqli_fetch_assoc($createdByResult);
            if ($approvedByResult)
                $approvedBy = mysqli_fetch_assoc($approvedByResult);

            include('../components/order/order-information.php');
        }

        echo "</div>";
    }
}

?>