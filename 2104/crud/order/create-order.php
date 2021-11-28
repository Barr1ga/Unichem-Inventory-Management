<?php
include('../db_connect.php');

$sessionID = 1; // SESSION VARIABLE FOR CREATED BY
$customerFname = $_POST['customerFname'];
$customerLname = $_POST['customerLname'];
$emailAddress = $_POST['emailAddress'];
$dateOfBirth = date('Y-m-d', strtotime($_POST['dateOfBirth']));
$gender = $_POST['gender'];
$contactNo = $_POST['contactNo'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$region = $_POST['region'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$shippingDate = date('Y-m-d', strtotime($_POST['shippingDate']));
$orderDate = date('d-m-y h:i:s');
$productID = $_POST['productID'];
$quantity = $_POST['quantity'];

    $sql1 = "INSERT INTO customer (customerFName, CustomerLName, dateofBirth, gender, contactNo, email)
                VALUES ('$customerFname', '$customerLname', '$dateOfBirth', '$gender', '$contactNo', '$emailAddress')";
    if (mysqli_query($conn, $sql1)) {
        echo '<br /> Customer Information is successfully added.';
    } else {
        echo '<br /> Customer Information is not successfully added.';
    }

    $customerID = mysqli_insert_id($conn);
    $sql2 = "INSERT INTO customer_address (customerID, street, barangay, city, region, country, zip)
                VALUES ('$customerID', '$street', '$barangay',' $city', '$region', '$country', '$zip')";        
    if (mysqli_query($conn, $sql2)) {
        echo '<br /> Customer Address is successfully added.';
    }  else {
        echo '<br /> Customer Address is not successfully added.';
    }

    $sql3 = "INSERT INTO orders (customerID, createdBy, orderDate, orderStatus, shipRequiredDate, paidStatus) 
                VALUES ('$customerID', '$sessionID', '$orderDate', 'To-Approve', '$shippingDate', 'unpaid')";
    if (mysqli_query($conn, $sql3)) {
        echo '<br /> Order Information is successfully added.';
    }else {
        echo '<br /> Order Information is not successfully added.';
    }

    $orderID = mysqli_insert_id($conn);
    foreach($productID as $index => $elemID)
    {
        $prodID = $elemID;
        $qty = $quantity[$index];

        $sql4 = "INSERT INTO order_line (orderID, productID, quantity) VALUES ('$orderID','$prodID', '$qty')";
        if (mysqli_query($conn, $sql4)) {
            echo '<br /> An Order Line is successfully added.';
        }else {
            echo '<br /> An Order Line is not successfully added.';
        }
    }

header('location: ../../sections/orders.php');

?>  