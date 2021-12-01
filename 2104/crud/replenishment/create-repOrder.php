<?php
   include('../db_connect.php');

    /* For Testing Only */
    // print_r($_POST['productID']);
    // print_r($_POST['quantity']);
    // print($_POST['supplier']);
    // print(date('Y-m-d', strtotime($_POST['shippingDate'])));
    // print_r($_POST['price']);
    
    /* Rep Information */
    $createdBy = 2; // NOTE: Change this to Session Variable
    $supplier = $_POST['supplier'];
    $orderDate = date('Y-m-d');
    $shippingdate = date('Y-m-d', strtotime($_POST['shippingDate']));

    /* RepLine Information */
    $productID = $_POST['productID'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    /* Query to insert replenishment information */
    $sql1 = "INSERT INTO replenishment
                (supplierID, createdBy, repOrderDate, orderStatus, shipRequiredDate, paidStatus)
            VALUES ('$supplier', '$createdBy', '$orderDate', 'To-Approve', '$shippingdate', 'unpaid')";
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