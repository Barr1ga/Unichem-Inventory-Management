<?php 
    include('../crud/db_connect.php');
    
    $getproduct = "SELECT * FROM product";

    $result = mysqli_query($conn, $getproduct);
    
    
    
        echo "
        
       



        <div class='container-header d-flex'>
                <div class='list-cell'>
                        Product ID
                </div>
                
                <div class='list-cell'>
                        Trade Name
                </div>
                
                <div class='list-cell'>
                        Price
                </div>

                <div class='list-cell'>
                        Quantity
                </div>

                <div class='list-cell'>
                        
                </div>

                <div class='list-cell'>
                        
                </div>

                

                <div class='list-cell'>
                        
                </div>

                <div class='list-cell'>
                        
                </div>
                <div class='list-cell'>
                        
                </div>

                
            </div>

            
            
   <br>
    <div class='scroll-list-2'>
            ";

        while ($inventory = mysqli_fetch_assoc($result)) {
            
                include('../components/inventory/inventory-list.php');
                 
        }  
        echo "
            </div>
        ";

        
    
?>













