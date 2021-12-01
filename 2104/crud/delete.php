<?php 
    include('db_connect.php');

    switch($_POST['delete']){
         case "order":
            $orderID = $_POST['orderID'];
            $deleteOrder = "DELETE FROM orders WHERE orderID=$orderID";
            mysqli_query($conn, $deleteOrder);
            header("Location: ../sections/orders.php");      
            break;      
        case "replenishment":
            $repID = $_POST['repID'];
            $deleteRep = "DELETE FROM replenishment WHERE repOrderID=$repID";
            mysqli_query($conn, $deleteRep);
            header("Location: ../sections/replenishments.php");      
            break;    
    }    
?>












