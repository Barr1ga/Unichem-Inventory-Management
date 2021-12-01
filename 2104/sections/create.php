<?php 
    include('../crud/db_connect.php');
    session_start();
    switch($_POST['create']){
        case "customer":
            // $customerID = $_POST['customerID'];
            // $customerFName = $_POST['customerFName'];
            // $customerLName = $_POST['customerLName'];
            // $dateofBirth = $_POST['dateofBirth'];
            // $email = $_POST['email'];
            // $gender = $_POST['gender'];
            // $contactNo = $_POST['contactNo'];
            // $street = $_POST['street'];
            // $barangay = $_POST['barangay'];
            // $city = $_POST['city'];
            // $region = $_POST['region'];
            // $country = $_POST['country'];
            // $zip = $_POST['zip'];


            // $insertCustomer = "SELECT *
            //                     FROM customer
            //                     JOIN customer_address
            //                     ON customer.customerID=customer_address.customerID
            //                     "

            // $insertInformation = "INSERT INTO `customer` (`customerFName`, `customerLName`, `dateofBirth`, `email`, `gender`, `contactNo`)
            //                             VALUES ('$customerFName', '$customerLName', '$dateofBirth', '$email', '$gender', '$contactNo')";
    
        
            // $insertAddress = "INSERT INTO `customer_address` (`street`, `barangay`, `city`, `region`, `country`, `zip`)
            //                             VALUES ('$street', '$barangay', '$city', '$region', '$country', '$zip')";


            // if (mysqli_query($conn, $insertInformation) && mysqli_query($conn, $insertAddress)) {
            //     echo "Record updated successfully";
            //     header("Location: customers.php");
            // } else {
            //     echo "Error creating user: " . mysqli_error($conn);
            // } 

            break;

        case "supplier":
            // $customerID = $_POST['customerID'];
            // $customerFName = $_POST['customerFName'];
            // $customerLName = $_POST['customerLName'];
            // $dateofBirth = $_POST['dateofBirth'];
            // $email = $_POST['email'];
            // $gender = $_POST['gender'];
            // $contactNo = $_POST['contactNo'];
            // $street = $_POST['street'];
            // $barangay = $_POST['barangay'];
            // $city = $_POST['city'];
            // $region = $_POST['region'];
            // $country = $_POST['country'];
            // $zip = $_POST['zip'];

            // $insertInformation = "INSERT INTO `customer` (`customerFName`, `customerLName`, `dateofBirth`, `email`, `gender`, `contactNo`)
            //                             VALUES ('$customerFName', '$customerLName', '$dateofBirth', '$email', '$gender', '$contactNo')";
    
        
            // $insertAddress = "INSERT INTO `customer_address` (`street`, `barangay`, `city`, `region`, `country`, `zip`)
            //                             VALUES ('$street', '$barangay', '$city', '$region', '$country', '$zip')";


            // if (mysqli_query($conn, $insertInformation) && mysqli_query($conn, $insertAddress)) {
            //     echo "Record updated successfully";
            //     header("Location: customers.php");
            // } else {
            //     echo "Error creating user: " . mysqli_error($conn);
            // } 

            break;

        case "product":
            $tradeName = $_POST['tradeName'];
            $brandName = $_POST['brandName'];
            $description = $_POST['description'];
            $dateContained = $_POST['dateContained'];
            $price = $_POST['price'];
            $applicationType = $_POST['applicationType'];
            $cureTime = $_POST['cureTime'];
            $color = $_POST['color'];
            $form = $_POST['form'];
            $packageType = $_POST['packageType'];
            $packageSize = $_POST['packageSize'];
            $minOperatingTemp = $_POST['minOperatingTemp'];
            $maxOperatingTemp = $_POST['maxOperatingTemp'];
            $viscosity = $_POST['viscosity'];
            $chemicalComposition = $_POST['chemicalComposition'];
            $operatingTempRange = $_POST['operatingTempRange'];
            $inStock = $_POST['inStock'];

            $insertProduct = "INSERT INTO `product` (`tradeName`, `brandName`, `description`, `dateContained`, `price`, `applicationType`,
            `cureTime`, `color`, `form`, `packageType`, `packageSize`, `minOperatingTemp`,`maxOperatingTemp`, `viscosity`, `chemicalComposition`,
            `operatingTempRange`, `inStock`)
            VALUES ('$tradeName', '$brandName', '$description', '$dateContained', '$price', '$applicationType',
            '$cureTime', '$color', '$form', '$packageType', '$packageSize', '$minOperatingTemp','$maxOperatingTemp', '$viscosity', '$chemicalComposition',
            '$operatingTempRange', '$inStock')";
    

            if (mysqli_query($conn, $insertProduct)) {
                echo "Record created successfully";
                header("Location: inventory.php");
            } else {
                echo "Error creating user: " . mysqli_error($conn);
            } 

            break;

        case "user":
            $userID = $_POST['userID'];
            $userFirstName = $_POST['userFirstName'];
            $userLastName = $_POST['userLastName'];
            $email = $_POST['email'];
            $userType = $_POST['userType'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];
        

            $insertEmployee = "INSERT INTO `inventory_users`(`userID`, `userType`, `userFirstName`, `userLastName`, `userName`, `email`, `password`)
            VALUES ('$userID','$userType','$userFirstName','$userLastName','$userName','$email','$password')";
     
            if (mysqli_query($conn, $insertEmployee)) {
                echo "Record created successfully";
                header("Location: employees.php");
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            } 
    }
    

   
    

    
?>












