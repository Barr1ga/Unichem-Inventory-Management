<?php 
    include('../crud/db_connect.php');
    session_start();
    
    switch($_POST['delete']){
        
         case "order":
            $orderID = $_POST['orderID'];
            $deleteOrder = "DELETE FROM orders WHERE orderID=$orderID";
            mysqli_query($conn, $deleteOrder);
            header("Location: orders.php");      
            break;      
        case "replenishment":
            $repID = $_POST['repID'];
            $deleteRep = "DELETE FROM replenishment WHERE repID=$repOrderID";
            mysqli_query($conn, $deleteRep);
            header("Location: replenishments.php");      
            break;  
    }
