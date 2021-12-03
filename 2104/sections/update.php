<?php 
    include('../crud/db_connect.php');
    session_start();

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
            $region = $_POST['region'];
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
                                        `region`='$region',
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
            $region = $_POST['region'];
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
                                        `region`='$region',
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

        case "user":
            $userID = $_POST['userID'];
            $userFirstName = $_POST['userFirstName'];
            $userLastName = $_POST['userLastName'];
            $email = $_POST['email'];
            $userType = $_POST['userType'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];
        

            $updateEmployee = "UPDATE `inventory_users`
                                        SET `userFirstName`='$userFirstName', 
                                        `userLastName`='$userLastName',
                                        `email`='$email',
                                        `userType`='$userType',
                                        `userName`='$userName',
                                        `password`='$password'
                                        WHERE userID='$userID'";
     
            if (mysqli_query($conn, $updateEmployee)) {
                echo "Record updated successfully";
                header("Location: employees.php");
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            } 

            break;

            case "product":
                $productID = $_POST['productID'];
                $tradeName = $_POST['tradeName'];
                $description = $_POST['description'];
                $brandName = $_POST['brandName'];
                $dateContained = $_POST['dateContained'];
                $price = $_POST['price'];
                $applicationType = $_POST['applicationType'];
                $cureTime = $_POST['cureTime'];
                $color = $_POST['color'];
                $form = $_POST['form'];
                $packageType = $_POST['packageType'];
                $packageSize = $_POST['packageSize'];
                $maxOperatingTemp = $_POST['maxOperatingTemp'];
                $minOperatingTemp = $_POST['minOperatingTemp'];
                $viscosity = $_POST['viscosity'];
                $chemicalComposition = $_POST['chemicalComposition'];
                $operatingTempRange = $_POST['operatingTempRange'];
                $inStock = $_POST['inStock'];

                $filename = $_FILES["productImage"]["name"];
                $tempname = $_FILES["productImage"]["tmp_name"];
                $folder = "../assets/images/".$filename;
    
                $updateProductInfo = "UPDATE `product`
                                            SET
                                            `tradeName`='$tradeName',
                                            `description`='$description',
                                            `brandName`='$brandName',
                                            `dateContained`='$dateContained',
                                            `price`='$price',
                                            `applicationType`='$applicationType',
                                            `cureTime`='$cureTime',
                                            `color`='$color',
                                            `form`='$form',
                                            `packageType`='$packageType',
                                            `packageSize`='$packageSize',
                                            `maxOperatingTemp`='$maxOperatingTemp',
                                            `minOperatingTemp`='$minOperatingTemp',
                                            `viscosity`='$viscosity',
                                            `chemicalComposition`='$chemicalComposition',
                                            `operatingTempRange`='$operatingTempRange',
                                            `productImage`='$filename',
                                            `inStock`='$inStock'
                                            WHERE productID='$productID'";
         
                if (mysqli_query($conn, $updateProductInfo)) {
                    if (move_uploaded_file($tempname, $folder)) {
                        $msg = "Image uploaded successfully";
                    } else {
                        $msg = "Failed to upload image";
                    }
                    echo "Record updated successfully";
                    header("Location: inventory.php");
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                } 
    
                break;
    }
