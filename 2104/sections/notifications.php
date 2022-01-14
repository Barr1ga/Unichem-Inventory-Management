<?php
session_start();
if (empty($_SESSION['userType'])) {
    header('Location: ../index.php');
}

unset($_SESSION['orderActive']);
unset($_SESSION['repActive']);

include('../style/import.php');
include('../crud/db_connect.php');

$_SESSION['flag']=0;

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unichem</title>
</head>

<body>
    <main>
        <!-- NAV -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light nav-container shadow-md bg-body rounded" style="width: 280px;">
            <a href="notifications.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <div class="row justify-content-md-center">
                    <img class="unichem-logo-login" src="../assets/images/Unichem-Logo-Text.svg">
                </div>
            </a>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="notifications.php" class="nav-link link-dark active" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use class="active-color" xlink:href="#notif" />
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
                    <a href="customers.php" class="nav-link link-dark ">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#customer" />
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
                <?php if ($_SESSION['userType'] == "Manager") {
                    echo "
                    <li>
                        <a href='employees.php' class='nav-link link-dark'>
                            <svg class='bi me-2' width='16' height='16'>
                                <use xlink:href='#employee' />
                            </svg>
                            Employees
                        </a>
                    </li>
                
                   

                        <li>
                            <div class='dropdown '>
                                <button class='nav-reports' type='button' id='dropdownMenu2' data-bs-toggle='dropdown' aria-expanded='false'>
                                    <svg class='bi me-2' width='16' height='16'>
                                    <use class='' xlink:href='#sales' />
                                    </svg>
                                    &nbspReports
                                </button>
                                
                                <ul class='dropdown-menu dropdown-menu-reports' aria-labelledby='dropdownMenu2'>
                                    <li><a class='dropdown-item-reports' type='button' href='reports/report-orders.php'>            Orders</a></li>
                                    <li><a class='dropdown-item-reports' type='button' href='reports/report-replenishments.php'>    Replenishments</a></li>
                                    <li><a class='dropdown-item-reports' type='button' href='reports/report-inventory.php'>         Inventory</a></li>
                                </ul>
                            </div>
                        </li>
                    ";
                } ?>
            </ul>
            <hr>


            <div class="container">
                <div class="row align-items-end">
                    <div class="col d-flex justify-content-center">
                        <a href="../index.php" class="text-decoration-none btn btn-danger btn-logout">
                            Log Out
                        </a>
                    </div>
                </div>

            </div>
        </div>



        <div class="father-container">

            <div class="d-flex">
                <h4>Notifications</h4>
            </div>
            <br>
            <div class="d-flex">
                <div class="layout-column">
                    <?php include('../components/notifications/rep-list-recent.php'); ?>
                </div>
            </div>
            <br />
            <div class="d-flex">
                <div class="layout-column">
                    <?php include('../components/notifications/order-list-recent.php'); ?>
                </div>
            </div>
            <br />
            <div class="d-flex">
                <div class="layout-column">
                    <?php include('../components/notifications/low-stock.php'); ?>
                </div>
            </div>
                <?php if($_SESSION['flag']==0){
                    echo "<p class='text-danger'>There no recent notifications</p>";
                }
                    ?>




        </div>



    </main>
</body>

</html>