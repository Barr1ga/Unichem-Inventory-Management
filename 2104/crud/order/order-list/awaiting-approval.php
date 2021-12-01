<?php 
    include('../crud/db_connect.php');
    
    $getOrderList = "SELECT *, SUM(ol.quantity * p.price) as 'Total' 
                    FROM orders o
                    JOIN inventory_users iu ON o.createdBy = iu.userID 
                    JOIN customer c ON o.customerID = c.customerID
                    JOIN order_line ol ON ol.orderID = o.orderID
                    JOIN product p on ol.productID = p.productID
                    JOIN customer_address ca ON ca.customerID = c.customerID
                    WHERE o.orderStatus = 'Awaiting Approval'
                    GROUP BY o.orderID";

    $result = mysqli_query($conn, $getOrderList);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
        <div class=''>
            <div class='scroll-list'>
            ";
        while ($order = mysqli_fetch_assoc($result)) {
            include('../components/order/order-list.php');
        } 
        echo "
            </div>
        </div>
    ";
    }else{
        echo "<div class ='empty-message'>There are no Awaiting Approvals.</div>";
    }

?>













