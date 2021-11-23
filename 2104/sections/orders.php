<?php
include('../style/import.php');
include('../crud/order/check-default.php');

?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Unichem</title>
</head>

<body>
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
                    <a href="suppliers.php" class="nav-link link-dark">
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
                    <a href="orders.php" class="nav-link link-dark active">
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
            <h4>Orders</h4>
            <br>
            <div class="layout-column">
                <form method="post" action="">
                    <input type="text" class="form-control search-input" placeholder="Search">
                </form>
            </div>
            <br>
            <div class="d-flex">
                <div class="layout-column">

                    <ul class="nav nav-pills mb-3 orderNav" id="pills-tab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-to-approve-tab" data-bs-toggle="pill" data-bs-target="#pills-to-approve" type="button" role="tab" aria-controls="pills-to-approve" aria-selected="true">To Approve</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-to-confirm-tab" data-bs-toggle="pill" data-bs-target="#pills-to-confirm" type="button" role="tab" aria-controls="pills-to-confirm" aria-selected="false">To Confirm</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-receive-tab" data-bs-toggle="pill" data-bs-target="#pills-to-receive" type="button" role="tab" aria-controls="pills-to-receive" aria-selected="false">To Receive</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-to-completed-tab" data-bs-toggle="pill" data-bs-target="#pills-to-completed" type="button" role="tab" aria-controls="pills-to-completed" aria-selected="false">Completed</button>
                        </li>

                        <li class="nav-item create-new-button" role="presentation">
                            <button class="nav-link" id="pills-create-tab" data-bs-toggle="pill" data-bs-target="#pills-create" type="button" role="tab" aria-controls="pills-create" aria-selected="false">Create Order</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-to-approve" role="tabpanel" aria-labelledby="pills-to-confirm-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list-approve.php');

                            ?>
                        </div>

                        <div class="tab-pane fade" id="pills-to-confirm" role="tabpanel" aria-labelledby="pills-to-ship-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list-confirm.php');
                            ?>
                        </div>

                        <div class="tab-pane fade" id="pills-to-receive" role="tabpanel" aria-labelledby="pills-to-receive-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list-receive.php');
                            ?>
                        </div>

                        <div class="tab-pane fade" id="pills-to-completed" role="tabpanel" aria-labelledby="pills-to-completed-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list-completed.php');
                            ?>
                        </div>

                        <div class="tab-pane fade" id="pills-create" role="tabpanel" aria-labelledby="pills-create-tab">
                            <?php
                            include('../components/order/create-order.php');
                            ?>
                        </div>
                    </div>

                </div>

                <div class="layout-column">
                    <br><br>
                    Order Information<br><br>
                    <?php include('../crud/order/order-information.php') ?>
                </div>

            </div>

        </div>

    </main>

</body>

</html>