<?php 
    include('../crud/db_connect.php');

    switch($_POST['update']){
        case "customer":
            $customerID = $_POST['customerID'];
            $customerFName = $_POST['customerFName'];
            $customerLName = $_POST['customerLName'];
            $dateofBirth = $_POST['dateofBirth'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $contactNo = $_POST['contactNo'];
            $street = $_POST['street'];
            $barangay = $_POST['barangay'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $zip = $_POST['zip'];

            $updateCustomerInformation = "UPDATE `customer`
                                        SET `customerFName`='$customerFName', 
                                        `customerLName`='$customerLName',
                                        `dateofBirth`='$dateofBirth',
                                        `email`='$email',
                                        `gender`='$gender',
                                        `contactNo`='$contactNo'
                                        WHERE customerID='$customerID'";
                    
            $updateCustomerAddress = "UPDATE `customer_address`
                                        SET `street`='$street',
                                        `barangay`='$barangay',
                                        `city`='$city',
                                        `state`='$state',
                                        `country`='$country',
                                        `zip`='$zip'
                                        WHERE customerID='$customerID'";

            if (mysqli_query($conn, $updateCustomerInformation) && mysqli_query($conn, $updateCustomerAddress)) {
                echo "Record updated successfully";
                header("Location: customers.php");
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            } 

            break;

        case "supplier":
            $supplierID = $_POST['supplierID'];
            $companyName = $_POST['companyName'];
            $contactFName = $_POST['contactFName'];
            $contactLName = $_POST['contactLName'];
            $email = $_POST['email'];
            $contactNo = $_POST['contactNo'];
            $street = $_POST['street'];
            $barangay = $_POST['barangay'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $zip = $_POST['zip'];

            $updateSupplierInformation = "UPDATE `supplier`
                                        SET `companyName`='$companyName',
                                        `contactFName`='$contactFName', 
                                        `contactLName`='$contactLName',
                                        `email`='$email',
                                        `contactNo`='$contactNo'
                                        WHERE supplierID='$supplierID'";
                    
            $updateSupplierAddress = "UPDATE `supplier_address`
                                        SET `street`='$street',
                                        `barangay`='$barangay',
                                        `city`='$city',
                                        `state`='$state',
                                        `country`='$country',
                                        `zip`='$zip'
                                        WHERE supplierID='$supplierID'";

            if (mysqli_query($conn, $updateSupplierInformation) && mysqli_query($conn, $updateSupplierAddress)) {
                echo "Record updated successfully";
                header("Location: suppliers.php");
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            } 

            break;
    }
    

   
    

    
?>












