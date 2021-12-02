<?php
include('../crud/db_connect.php');

if (isset($_GET['repID'])) {
    $repID = $_GET['repID'];
    $total = 0;
    $getRepInformation = "SELECT *, SUM(rl.quantity * rl.priceEach) as 'Total' 
                            FROM replenishment r
                            JOIN replenishment_line rl ON rl.repOrderID = r.repOrderID
                            JOIN product p ON rl.productID = p.productID
                            JOIN supplier s ON s.supplierID = r.supplierID
                            WHERE rl.repOrderID = $repID
                            GROUP BY r.repOrderID";

    $getRepLine = "SELECT *
                        FROM replenishment r
                        JOIN replenishment_line rl ON rl.repOrderID = r.repOrderID
                        JOIN product p ON rl.productID = p.productID
                        JOIN supplier s ON s.supplierID = r.supplierID
                        WHERE rl.repOrderID = $repID
                        GROUP BY rl.replenishmentLineID";

    $result1 = mysqli_query($conn, $getRepInformation);
    $result2 = mysqli_query($conn, $getRepLine);

    if (mysqli_num_rows($result1) > 0) {
        echo "<div class='scroll-list-2'>";
        if ($rep = mysqli_fetch_assoc($result1)) {

            $createdByID = $rep['createdBy'];
            $approvedByID = $rep['approvedBy'];

            $createdByquery = "SELECT * 
                            FROM inventory_users
                            WHERE userID=$createdByID LIMIT 1";

            $approvedByquery = "SELECT * 
                            FROM inventory_users
                            WHERE userID=$approvedByID LIMIT 1";

            $createdByResult = mysqli_query($conn, $createdByquery);
            $approvedByResult = mysqli_query($conn, $approvedByquery);

            $createdBy = mysqli_fetch_assoc($createdByResult);
            if ($approvedByResult)
                $approvedBy = mysqli_fetch_assoc($approvedByResult);

            include('../components/replenishment/rep-information.php');
        }
        echo "</div>";
    }
}

?>