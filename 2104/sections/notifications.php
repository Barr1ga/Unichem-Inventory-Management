<?php
session_start();
if(empty($_SESSION['userType'])){
    header('Location: login.php');
}
include('../style/import.php');
include('../crud/db_connect.php');

?>

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
                    <a href="login.php" class="d-flex align-items-center link-dark text-decoration-none">
                        <strong>Logout</strong>
                    </a>
                </div>
            </div>

        </div>
    </div>



    <div class="father-container">

        <!-- START ADDING CODE HERE -->
        <div class="d-flex">
            <h3>Notifications</h3>
        </div>
        <br>
        <div class="d-flex">
            <div class="layout-column">
                <?php include('../components/reports/rep-list-recent.php'); ?>
            </div>
        </div>
        <br />
        <div class="d-flex">
            <div class="layout-column">
                <?php include('../components/reports/order-list-recent.php'); ?>
            </div>
        </div>
        <br />
        <div class="d-flex">
            <div class="layout-column">
                <?php include('../components/reports/low-stock.php'); ?>
            </div>
        </div>




    </div>



</main>