<?php
   include('../db_connect.php');

    /* Rep Information */
    $createdBy = $_SESSION['userType']; 
    $supplier = $_POST['supplier'];
    $orderDate = date('Y-m-d');
    $shippingdate = date('Y-m-d', strtotime($_POST['shippingDate']));

    /* RepLine Information */
    $productID = $_POST['productID'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    /* Query to insert replenishment information */
    $sql1 = "INSERT INTO replenishment
                (supplierID, createdBy, repOrderDate, orderStatus, shipRequiredDate)
            VALUES ('$supplier', '$createdBy', '$orderDate', 'Awaiting-Approval', '$shippingdate')";
    if (mysqli_query($conn, $sql1)) {
        echo '<br /> Replenishment Information is successfully added.';
        $repOrderID = mysqli_insert_id($conn);
    }  else {
        echo '<br /> Replenishment Information is not successfully added. ' . mysqli_error($conn);
    }

    /* Loop through the array of products and quantity */
    foreach($productID as $index => $elemID) {
        $prodID = $elemID;
        $qty = $quantity[$index];
        $priceEach = $price[$index];

        /* Query to insert replenishment line */
        $sql2 = "INSERT INTO replenishment_line
                    (repOrderID, productID, quantity, priceEach)
                VALUES ('$repOrderID', '$prodID', '$qty', '$priceEach')";
        if (mysqli_query($conn, $sql2)) {
            echo '<br /> A Replenishment Line is successfully added.';
        }  else {
            echo '<br /> A Replenishment Line is not successfully added. ' . mysqli_error($conn);
        }
    }

    header('location: ../../sections/replenishments.php');
?>