<?php 
    include('../crud/db_connect.php');

    switch($_POST['delete']){
        case "customer":
            $customerID = $_POST['customerID'];
            $deleteCustomer = "DELETE FROM customer WHERE customerID=$customerID";
            mysqli_query($conn, $deleteCustomer);
            header("Location: customers.php");      
            break;
        case "supplier":
            $supplierID = $_POST['supplierID'];
            $deleteSupplier = "DELETE FROM supplier WHERE supplierID=$supplierID";
            mysqli_query($conn, $deleteSupplier);
            header("Location: suppliers.php");      
            break;
        case "inventory":
            $productID = $_POST['productID'];
            $deleteproduct = "DELETE FROM product WHERE productID=$productID";
            mysqli_query($conn, $deleteproduct);
            header("Location: inventory.php");      
            break;
         case "order":
            $orderID = $_POST['orderID'];
            $deleteOrder = "DELETE FROM orders WHERE orderID=$orderID";
            mysqli_query($conn, $deleteOrder);
            header("Location: orders.php");      
            break;      
        case "replenishment":
            $repID = $_POST['repID'];
            $deleteRep = "DELETE FROM replenishment WHERE repOrderID=$repID";
            mysqli_query($conn, $deleteRep);
            header("Location: replenishments.php");      
            break;    
    }    
?>












