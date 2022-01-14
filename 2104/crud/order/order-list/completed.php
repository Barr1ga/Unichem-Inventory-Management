<?php 
    include('../crud/db_connect.php');
    
    $getOrderList = "SELECT *, SUM(ol.quantity * p.price) as 'Total'  
                    FROM orders o
                    JOIN customer c ON o.customerID = c.customerID
                    JOIN inventory_users iu ON o.createdBy = iu.userID 
                    JOIN order_line ol ON ol.orderID = o.orderID
                    JOIN product p on ol.productID = p.productID
                    JOIN customer_address ca ON ca.customerID = c.customerID
                    WHERE o.orderStatus = 'Completed'
                    GROUP BY o.orderID";

    $stmt = $conn->prepare($getOrderList);
    $stmt->execute();

    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        echo "
        <div class=''>
            <div class='scroll-list'>
            ";
        while ($order = $result->fetch_assoc()) {
            include('../components/order/order-list.php');
        } 
        echo "
            </div>
        </div>
    ";
    }else{
        echo "<div class ='empty-message'>There are no Completed Orders.</div>";
    }

    $stmt->close();
    $conn->close();
?>