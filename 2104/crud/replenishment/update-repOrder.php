<?php
    include('../db_connect.php');

    /* Product Information */
    $orderDate = $_POST['orderDate'];
    $shippingDate = $_POST['shippingDate'];
    $repOrderID = $_POST['repOrderID'];

    /* For Testing */
    print($orderDate."<br>");
    print($shippingDate."<br>");
    print($repOrderID."<br>");

     /* Query to update repOrder information */
     $sql = "UPDATE replenishment
                SET repOrderDate = '$orderDate', shipRequiredDate = '$shippingDate'
                WHERE repOrderID = '$repOrderID' ";

    if (mysqli_query($conn, $sql)) {
        echo '<br /> Replenishment Order Information is successfully updated.';
    } else {
        echo '<br /> Replenishment Order Information is not successfully updated. ' . mysqli_error($conn);
    }
        
    header('location: ../../sections/replenishments.php');
?>