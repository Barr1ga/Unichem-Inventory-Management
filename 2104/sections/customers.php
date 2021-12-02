<?php
session_start();
if(empty($_SESSION['userType'])){
    header('Location: ../index.php');
}
include('../style/import.php');
include('../crud/customer/check-default.php');

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unichem</title>
</head>
<!-- bayor -->
<body>
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light nav-container shadow-md bg-body rounded" style="width: 280px;">
            <a href="notifications.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                <div class="row justify-content-md-center">
                    <img class="unichem-logo-login" src="../assets/images/Unichem-Logo-Text.svg">
                </div>
            </a>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="notifications.php" class="nav-link link-dark " aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#notif" />
                        </svg>
                        Notifications
                    </a>
                </li>
                <li>
                    <a href="suppliers.php" class="nav-link link-dark ">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#supplier" />
                        </svg>
                        Suppliers
                    </a>
                </li>
                <li>
                    <a href="customers.php" class="nav-link link-dark active">
                        <svg class="bi me-2" width="16" height="16">
                            <use class="active-color" xlink:href="#customer" />
                        </svg>
                        Customers
                    </a>
                </li>
                <li>
                    <a href="inventory.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#inventory" />
                        </svg>
                        Inventory
                    </a>
                </li>
                <li>
                    <a href="orders.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#order" />
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="replenishments.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#rep" />
                        </svg>
                        Replenishments
                    </a>
                </li>
                <li>
                    <a href="employees.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#employee  " />
                        </svg>
                        Employees
                    </a>
                </li>
                <li>
                    <a href="sales.php" class="nav-link link-dark">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#sales" />
                        </svg>
                        Sales
                    </a>
                </li>  
            </ul>
            <hr>

            <div class="container">
                <div class="row align-items-end">
                    <div class="col d-flex justify-content-center">
                        <a href="../index.php" class="d-flex align-items-center link-dark text-decoration-none">
                            <strong>Logout</strong>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="father-container">
            <h4>Customers</h4>
            <br>
            <div class="layout-column">
                <form method="post" action="">
                    <input type="text" class="form-control search-input" placeholder="Search">
                </form>
            </div>
            <br>    










            <ul class="nav nav-pills mb-3 orderNav" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="To-Approve" data-bs-toggle="pill" data-bs-target="#pills-to-approve" type="button" role="tab" aria-controls="pills-to-approve" aria-selected="true">Customers</button>
                    </li>
        
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="To-Confirm" data-bs-toggle="pill" data-bs-target="#pills-to-confirm" type="button" role="tab" aria-controls="pills-to-confirm" aria-selected="false">Create Customer</button>
                    </li>
                
            </ul>

            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-to-approve" role="tabpanel" aria-labelledby="pills-to-approve-tab">
                <div class="d-flex">
                    <div class="layout-column">
                        <?php include('../crud/customer/customer-list.php'); ?>
                    </div>

                    <?php include('../crud/customer/customer-information.php'); ?>

                    <div class="layout-column">
                        Customer Information<br><br>
                        <?php include('../components/customer/customer-information.php'); ?>
                    </div>

                    <div class="layout-column">
                        Customer Orders<br><br>
                        <div class="scroll-list-2">
                            <?php include('../crud/customer/customer-orders.php'); ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-to-confirm" role="tabpanel" aria-labelledby="pills-to-cofirm-tab">
                <?php include('../components/customer/customer-create.php'); ?>
            </div>

            </div>
































            
        </div>
    </main>
</body>

</html>