<?php
include('../style/import.php');
include('../crud/supplier/check-default.php');
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unichem</title>
</head>

    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light nav-container shadow-md bg-body rounded" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">

                <div class="row justify-content-md-center">
                    <img class="unichem-logo-login" src="../assets/images/Unichem-Logo-Text.svg">
                </div>
            </a>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="notifications.php" class="nav-link link-dark " aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#report" />
                        </svg>
                        Notifications
                    </a>
                </li>
                <li>
                    <a href="suppliers.php" class="nav-link link-dark active">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#supplier" />
                        </svg>
                        Suppliers
                    </a>
                </li>
                <li>
                    <a href="customers.php" class="nav-link link-dark">
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
                    <a href="orders.php" class="nav-link link-dark" active>
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
            </ul>
            <hr>

            <div class="container">
                <div class="row align-items-end">
                    <div class="col d-flex justify-content-center">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none">
                            <strong>Settings</strong>
                        </a>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none">
                            <strong>Support</strong>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="father-container">
            <h4>Suppliers</h4>
            <br>
            <div class="layout-column">
                <form method="post" action="">
                    <input type="text" class="form-control search-input" placeholder="Search">
                </form>
            </div>
            <br>
            <div class="d-flex">
                <div class="layout-column">
                    <?php include('../crud/supplier/supplier-list.php'); ?>
                </div>

                <?php include('../crud/supplier/supplier-information.php'); ?>

                <div class="layout-column">
                    Supplier Information<br><br>
                    <?php include('../components/supplier/supplier-information.php'); ?>
                </div>

                <div class="layout-column">
                    Supplier Orders<br><br>
                    <div class="scroll-list">
                        <?php include('../crud/supplier/supplier-replenishment.php'); ?>
                        
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>
</html>