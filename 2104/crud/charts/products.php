<?php 
include('../crud/db_connect.php');

$query = "SELECT productID, tradeName, inStock from product";
$exec = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($exec)){
    echo "['".$row['productID']."',".$row['tradeName']."',".$row['inStock']."],";
}