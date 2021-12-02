<?php
include('../crud/db_connect.php');

$id = $rep['repOrderID'];

$sql = "SELECT *
        FROM
            replenishment r
        JOIN replenishment_line rl ON
            rl.repOrderID = r.repOrderID
        JOIN product p ON
            p.productID = rl.productID
        WHERE r.repOrderID = $id;";

if ($rs = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($rs) > 0) {
        while ($prod = mysqli_fetch_assoc($rs)) {
            include('../components/replenishment/get-repOrder.php');
        } 
    }
} else {
    echo 'Error: '. mysqli_error($conn);
}

?>