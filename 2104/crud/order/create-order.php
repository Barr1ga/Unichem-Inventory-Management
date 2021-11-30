<?php
    include('../db_connect.php');

    /* Order Information */
    $createdBy = 2; // NOTE: Change this to Session Variable
    $orderDate = date('Y-m-d');
    $shippingDate = date('Y-m-d', strtotime($_POST['shippingDate']));

    /* Orderline Information */
    $productID = $_POST['productID'];
    $quantity = $_POST['quantity'];

    if(isset($_POST['old'])) {
        $customerID = $_POST['customer'];
    } else {
        /* Customer Information */
        $customerFname = $_POST['customerFname'];
        $customerLname = $_POST['customerLname'];
        $email = $_POST['emailAddress'];
        $dateOfBirth = date('Y-m-d', strtotime($_POST['dateOfBirth']));
        $gender = $_POST['gender'];
        $contactNo = $_POST['contactNo'];

        /* Customer Address */
        $street = $_POST['street'];
        $barangay = $_POST['barangay'];
        $city = $_POST['city'];
        $region = $_POST['region'];
        $country = $_POST['country'];
        $zip = $_POST['zip'];

        /* Query to insert customer information */
        $sql1 = "INSERT INTO customer (customerFName, CustomerLName, dateofBirth, gender, contactNo, email)
                    VALUES ('$customerFname', '$customerLname', '$dateOfBirth', '$gender', '$contactNo', '$email')";
        if (mysqli_query($conn, $sql1)) {
            echo '<br /> Customer Information is successfully added.';
            $customerID = mysqli_insert_id($conn);
        } else {
            echo '<br /> Customer Information is not successfully added. ' . mysqli_error($conn);
        }

        /* Query to insert customer address */
        $sql2 = "INSERT INTO customer_address (customerID, street, barangay, city, region, country, zip)
                    VALUES ('$customerID', '$street', '$barangay',' $city', '$region', '$country', '$zip')";        
        if (mysqli_query($conn, $sql2)) {
            echo '<br /> Customer Address is successfully added.';
        }  else {
            echo '<br /> Customer Address is not successfully added. ' . mysqli_error($conn);
        }
    }

    /* Query to insert order information */
    $sql3 = "INSERT INTO orders (customerID, createdBy, orderDate, orderStatus, shipRequiredDate, paidStatus) 
                VALUES ('$customerID', '$createdBy', '$orderDate', 'To-Approve', '$shippingDate', 'unpaid')";
    if (mysqli_query($conn, $sql3)) {
        echo '<br /> Order Information is successfully added.';
        $orderID = mysqli_insert_id($conn);
    }else {
        echo '<br /> Order Information is not successfully added. ' . mysqli_error($conn);
    }

    /* Loop through the array of products and quantity */
    foreach($productID as $index => $elemID)
    {
        $prodID = $elemID;
        $qty = $quantity[$index];

        /* Query to get current InStock */
        $sql4 = "SELECT *
                    FROM product
                    WHERE productID = '$prodID'";
                    
        if ($result = mysqli_query($conn, $sql4)) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo $row['inStock'];
            }
            echo '<br /> In Stock is fetched successfully.';
        }else {
            echo '<br /> In Stock is not fetched successfully. ' . mysqli_error($conn);
        }

        /* Check if InStock is greater or equal to given quantity */
        if ($row['inStock'] >= $qty) {

            /* Query to insert the specific order */
            $sql5 = "INSERT INTO order_line (orderID, productID, quantity) VALUES ('$orderID','$prodID', '$qty')";
            if (mysqli_query($conn, $sql5)) {
                echo '<br /> An Order Line is successfully added.';
            }else {
                echo '<br /> An Order Line is not successfully added. ' . mysqli_error($conn);
            }

            /* Query to update InStock */
            $sql6 = "UPDATE product
                        SET inStock = IF(inStock >= '$qty', inStock - '$qty', inStock)
                        WHERE productID = '$prodID' ";
            if (mysqli_query($conn, $sql6)) {
                echo '<br /> Product In Stock is successfully updated';
            }else {
                echo '<br /> Product In Stock is not successfully updated ' . mysqli_error($conn);
            }
        } else {
            
            /* Query to delete order information when Instock is lesser than given quantity */
            $sql7 = "DELETE FROM orders 
                        WHERE orderID = '$orderID'";

            if (mysqli_query($conn, $sql7)) {
                echo '<br /> Deleted successfully';
            }else {
                echo '<br /> Deletion is unsuccessful ' . mysqli_error($conn);
            }
        }
    }
    header('location: ../../sections/orders.php');
?>  