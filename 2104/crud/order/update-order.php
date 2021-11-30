<?php
    include('../db_connect.php');

    /* Order Information */
    $orderID = $_POST['orderID'];
    $createdBy = 2; // Change this to Session Variable
    $orderDate = $_POST['orderDate'];
    $shippingDate = date('Y-m-d', strtotime($_POST['shippingDate']));

    /* Customer Information */
    $customerID = $_POST['customerID']; 
    $customerFname = $_POST['fname'];
    $customerLname = $_POST['lname'];
    $email = $_POST['email'];
    $dateOfBirth = date('Y-m-d', strtotime($_POST['dob']));
    $gender = $_POST['gender'];
    $contactNo = $_POST['contactNo'];

    /* Customer Address */
    $addressID = $_POST['addressID']; 
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];


    $sql1 = "UPDATE orders 
                SET orderDate = '$orderDate', shipRequiredDate = '$shippingDate'
                WHERE orderID = '$orderID' ";

    if (mysqli_query($conn, $sql1)) {
        echo '<br /> Order Information is successfully updated.';
    } else {
        echo '<br /> Order Information is not successfully updated.' . mysqli_error($conn);
    }

    $sql2 = "UPDATE customer
                SET customerFName = '$customerFname', customerLName = '$customerLname', dateofBirth = '$dateOfBirth', gender = '$gender', 
                    contactNo = '$contactNo', email = '$email'
                WHERE customerID = '$customerID'";

    if (mysqli_query($conn, $sql2)) {
        echo '<br /> Customer Address is successfully updated.';
    } else {
        echo '<br /> Customer Address is not successfully updated.' . mysqli_error($conn);
    }

    $sql3 = "UPDATE customer_address 
                SET street = '$street', barangay = '$barangay', city = '$city', region = '$region', country = '$country', zip = '$zip'
                WHERE addressID = '$addressID'";
                
    if (mysqli_query($conn, $sql3)) {
        echo '<br /> Customer Address is successfully updated.';
    } else {
        echo '<br /> Customer Address is not successfully updated.' . mysqli_error($conn);
    }

    header('location: ../../sections/orders.php');
?>