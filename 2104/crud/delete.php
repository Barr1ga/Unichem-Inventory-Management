<?php 
    include('db_connect.php');
    session_start();

    switch($_GET['delete']){
         case "order":
            $orderID = $_GET['id'];
            $active = "../sections/orders.php?orderActive=" .$_GET['status'];

            $deleteOrder = "DELETE FROM orders WHERE orderID = (?)";
            $stmt = $conn->prepare($deleteOrder);
            $stmt->bind_param('i', $orderID);

            if ($stmt->execute()) 
                $_SESSION['msg'] = "Order is successfully deleted.";
            else 
                $_SESSION['msg'] = "Failed to delete order.";

            break;      
        case "replenishment":
            $repID = $_GET['id'];
            $active = "../sections/replenishments.php?repActive=" .$_GET['status'];
            
            $deleteRep = "DELETE FROM replenishment WHERE repOrderID = (?)";
            $stmt = $conn->prepare($deleteRep);
            $stmt->bind_param('i', $repID);

            if ($stmt->execute()) 
                $_SESSION['msg'] = "Replenishment order is successfully deleted.";
            else 
                $_SESSION['msg'] = "Failed to delete replenishment order.";
  
            break;    
    }  
    
    $stmt->close();
    $conn->close();
    header("Location: $active"); 
?>
