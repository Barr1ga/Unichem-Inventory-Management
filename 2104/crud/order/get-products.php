<?php

include('../crud/db_connect.php');

$sql = "SELECT * FROM product WHERE inStock > 0";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='container ml-2'>" .$row['tradeName'] . "</div><br>";
    }
} else {
    echo "bad";
}

?>