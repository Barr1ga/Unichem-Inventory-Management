<?php 
    include('../crud/db_connect.php');

    $repID = $_GET['repID'];
    
    $getRepInformation = "SELECT *
                                FROM replenishment r
                                JOIN replenishment_line rl ON rl.repOrderID = r.repOrderID
                                JOIN product p ON rl.productID = p.productID
                                WHERE rl.repOrderID = $repID";

    $result = mysqli_query($conn, $getRepInformation);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='scroll-list-2'>";
        while ($rep = mysqli_fetch_assoc($result)) {
            
            // $createdByID = $order['createdBy'];
            // $approvedByID = $order['approvedBy'];

            // $createdByquery = "SELECT * 
            //             FROM inventory_users
            //             WHERE userID=$createdByID LIMIT 1";

            // $approvedByquery = "SELECT * 
            //             FROM inventory_users
            //             WHERE userID=$approvedByID LIMIT 1";

            // $createdByResult = mysqli_query($conn, $createdByquery);
            // $approvedByResult = mysqli_query($conn, $approvedByquery);

            // $CreatedBy = mysqli_fetch_assoc($createdByResult);
            // $ApprovedBy = mysqli_fetch_assoc($approvedByResult);
            
            include('../components/replenishment/rep-information.php');

        }  
        echo "</div>";
        
    }

?>













