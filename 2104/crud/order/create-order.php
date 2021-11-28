<?php
include('../db_connect.php');

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

echo $_POST['productID'];

$sql = "INSERT INTO customer (customerFName, CustomerLName, dateofBirth, gender, contactNo, email)
                     VALUES ('$customerFname', '$customerLname', '$dateOfBirth', '$gender', '$contactNo', '$emailAddress')";

mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);

$sql1 = "INSERT INTO customer_address (customerID, street, barangay, city, region, country, zip)
                     VALUES ('$last_id', '$street', '$barangay',' $city', '$region', '$country', '$zip')";
                     
mysqli_query($conn, $sql1);

// header('location: ../../sections/orders.php');

?>