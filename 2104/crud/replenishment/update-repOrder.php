<?php
    session_start();
    include('../db_connect.php');

    $active = "../../sections/replenishments.php?repActive=".$_POST['defaultOrderStatus'];

    /* Update Order quantity if status is changed to completed*/
    if (!isset($_POST['orderStatus'])) {
        $orderStatus = $_POST['defaultOrderStatus'];
    }
    else {
        $orderStatus = $_POST['orderStatus'];
        if ($orderStatus == "Completed") {
            foreach($product as $index => $name) {
                $tradeName = $name;
                $qty = $quantity[$index];
    
                /* Query to update InStock */
                $query = "UPDATE product
                            SET inStock = inStock + '$qty'
                            WHERE tradeName = '$tradeName' ";
                if (mysqli_query($conn, $query)) {
                    echo '<br /> Product In Stock is successfully updated';
                }else {
                    echo '<br /> Product In Stock is not successfully updated ' . mysqli_error($conn);
                }
            }
        }
    }

    /* Replenishment Information */
    $orderDate = $_POST['orderDate'];
    $shippingDate = $_POST['shippingDate'];
    $repOrderID = $_POST['repOrderID'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

     /* Query to update repOrder information */
     $sql = "UPDATE replenishment
                SET repOrderDate = '$orderDate', shipRequiredDate = '$shippingDate', orderStatus = '$orderStatus'
                WHERE repOrderID = '$repOrderID' ";

    if (mysqli_query($conn, $sql)) {
        echo '<br /> Replenishment Order Information is successfully updated.';
    } else {
        echo '<br /> Replenishment Order Information is not successfully updated. ' . mysqli_error($conn);
    }

    header("location: $active");
    
?>