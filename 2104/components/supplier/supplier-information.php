
<?php if(isset($supplierID)){
    echo "
    <div class='container white-box-container customer-supplier-information round-edge'>
    <div class='row'>
        <div class='col'>
            <h4><b>#".$supplier['supplierID']."</b></h3>
        </div>
        <div class='col d-flex justify-content-end'>
            
        
            ";
            if($_SESSION['userType']=="Manager"){
               echo" <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                Update
                </button>";
            }
            
        echo"
            <!-- Modal -->
            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                <div class='modal-dialog modal-lg'>
                    <div class='modal-content '>
                        <div class='modal-header'>
                            <h4>Update Supplier #".$supplier['supplierID']."</h4>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            ";
                            include('supplier-update.php');
                            echo "
                        </div>
                        <div class='modal-footer'>
                                <div class=''>
                                    <button type='submit' class='btn btn-primary' value='submit'>Update</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            

            </div>
        </div>
        <br>
        <div class='row'>
            <div class='col'>
                <b>".$supplier['companyName']."</b>
            </div>
        </div>
        <br>
        <div class='row'>
            <div class='col'>
                Contact Person<br>
                Contact No<br>
                Email Address
            </div>
            <div class='col-8'>
                <b>
                    
                    ".$supplier['contactFName']." ".$supplier['contactLName']."<br>
                    ".$supplier['contactNo']."<br>
                    ".$supplier['email']."
                    
                </b>
            </div>

        </div>
        <hr>
        <div class='row'>
            <div class='col'>
                Address ID<br>
                Street<br>
                Barangay<br>
                City<br>
                Region<br>
                Zip<br>
                Country
            </div>
            <div class='col-8'>
                <b>
                    
                    ".$supplier['addressID']."<br>
                    ".$supplier['street']."<br>
                    ".$supplier['barangay']."<br>
                    ".$supplier['city']."<br>
                    ".$supplier['region']."<br>
                    ".$supplier['zip']."<br>
                    ".$supplier['country']."
                    
                    
                </b>
            </div>

        </div>

    </div>
    ";
}else{
    echo "<div class ='empty-information empty-message'></div>";
}
?>