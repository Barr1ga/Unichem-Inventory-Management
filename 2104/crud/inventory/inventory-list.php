<?php 
    include('../crud/db_connect.php');
    $bool = false;
    $getproduct = "SELECT * FROM product";

    $result = mysqli_query($conn, $getproduct);
    
        echo "
        <div class='container-header d-flex'>
                <div class='list-cell-2'>
                        Product ID
                </div>
                
                <div class='list-cell-2'>
                        Trade Name
                </div>
                
                <div class='list-cell-2'>
                        Price
                </div>

                <div class='list-cell-2'>
                        Quantity
                </div>

                


  
            </div>
            
   <br>
    <div class='scroll-list-2'>
            ";
        if (mysqli_num_rows($result) > 0) {
                while ($inventory = mysqli_fetch_assoc($result)) {
                
                        include('../components/inventory/inventory-list.php');
                        $bool = true;
                }  

        } else {
                echo "<div class ='empty-message'>There are no products in the inventory.</div>";           
        }

        echo "
        </div>
        ";
    
?>













