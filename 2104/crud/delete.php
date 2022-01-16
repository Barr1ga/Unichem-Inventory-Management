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
                $_SESSION['msg'] = "Order is Deleted Successfully";
            else 
                $_SESSION['msg'] = "Order is not Deleted Successfully.";

            break;      
        case "replenishment":
            $repID = $_GET['id'];
            $active = "../sections/replenishments.php?repActive=" .$_GET['status'];
            
            $deleteRep = "DELETE FROM replenishment WHERE repOrderID = (?)";
            $stmt = $conn->prepare($deleteRep);
            $stmt->bind_param('i', $repID);

            if ($stmt->execute()) 
                $_SESSION['msg'] = "Replenishment Order is Deleted Successfully";
            else 
                $_SESSION['msg'] = "Replenishment Order is not Deleted Successfully.";
  
            break;    
    }  
    
    $stmt->close();
    $conn->close();
    header("Location: $active"); 
?>
