<?php
session_start();
if (empty($_SESSION['userType'])) {
    header('Location: ../index.php');
}
include('../style/import.php');
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unichem</title>
</head>

<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar', 'corechart']
    });
</script>

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
                            <use xlink:href="#employee" />
                        </svg>
                        Employees
                    </a>
                </li>
                <li>
                    <a href="reports.php" class="nav-link link-dark active">
                        <svg class="bi me-2" width="16" height="16">
                            <use class="active-color" xlink:href="#sales" />
                        </svg>
                        Reports
                    </a>
                </li>
            </ul>
            <hr>

            <div class="container">
                <div class="row align-items-end">
                    <div class="col d-flex justify-content-center">
                        <a href="../index.php" class="text-decoration-none btn btn-danger btn-logout">
                            <strong>Logout</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="father-container">
            <h4>Reports</h4>
            <br>
            <div class="layout-column">
                <form method="post" action="">
                    <input type="text" class="form-control search-input" placeholder="Search">
                </form>
            </div>
            <br>

            <!-- =

            CUSTOMER/SUPPLIER

            number of customers graph (by month) 

            number of supplier graph (by month)

            =

            REPLENISHMENT

                number of Replenishments graph (by month) 

                number of products replenished graph (by month) 

                total cost of replenishments graph (by month)

            =

            ORDER

                number of Orders graph (by month)

                number of products ordered graph (by month) 

                total cost of Orders graph (by month)

            =

            RATIO OF ORDER STATUS

                ratio of order statuses on orders (pie chart) 

                ratio of order statuses on replenishment (pie chart)
                
            =

            INVENTORY
                
                products in stock graph (bar chart) (DONE) -->





            <div class="scroll-list-3">
                <?php
                include('../components/report/general/order-rep-count.php');
                ?>


                <br>

                <?php
                include('../components/report/inventory/products.php');
                ?>
                <br>

                <?php
                include('../components/report/order/ratio.php');
                ?>

                <br>

                <?php
                include('../components/report/replenishment/ratio.php');
                ?>
            </div>




















        </div>
    </main>

</body>

</html>