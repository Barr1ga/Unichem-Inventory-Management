<?php 
    include('db_connect.php');
    session_start();

    switch($_GET['delete']){
         case "order":
            $orderID = $_GET['id'];
            $active = "../sections/orders.php?orderActive=" .$_GET['status'];
            $deleteOrder = "DELETE FROM orders WHERE orderID=$orderID";
            if (mysqli_query($conn, $deleteOrder)) 
                $_SESSION['msg'] = "Order is Deleted Successfully";
            else 
                $_SESSION['msg'] = "Order is not Deleted Successfully.";
            header("Location: $active");      
            break;      
        case "replenishment":
            $repID = $_GET['id'];
            $active = "../sections/replenishments.php?repActive=" .$_GET['status'];
            $deleteRep = "DELETE FROM replenishment WHERE repOrderID=$repID";
            if (mysqli_query($conn, $deleteRep)) 
                $_SESSION['msg'] = "Order is Deleted Successfully";
            else 
                $_SESSION['msg'] = "Order is not Deleted Successfully.";
            header("Location: $active");      
            break;    
    }    
?>












