<?php
    include('../db_connect.php');

    /* Replenishment Information */
    if (!isset($_POST['orderStatus']))
        $orderStatus = $_POST['defaultOrderStatus'];
    else 
        $orderStatus = $_POST['orderStatus'];

    $paidStatus = "paid";
    if ($orderStatus == "Awaiting-Payment" || $orderStatus == "Awaiting-Approval") 
        $paidStatus = "unpaid";

    $orderDate = $_POST['orderDate'];
    $shippingDate = $_POST['shippingDate'];
    $repOrderID = $_POST['repOrderID'];

     /* Query to update repOrder information */
     $sql = "UPDATE replenishment
                SET repOrderDate = '$orderDate', shipRequiredDate = '$shippingDate', orderStatus = '$orderStatus', paidStatus = '$paidStatus'
                WHERE repOrderID = '$repOrderID' ";

    if (mysqli_query($conn, $sql)) {
        echo '<br /> Replenishment Order Information is successfully updated.';
    } else {
        echo '<br /> Replenishment Order Information is not successfully updated. ' . mysqli_error($conn);
    }
        
    header('location: ../../sections/replenishments.php');
?>