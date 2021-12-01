<?php
session_start();
unset($_SESSION['repActive']);

if (empty($_SESSION['orderActive'])) {
    $_SESSION['orderActive'] = '#To-Approve';
} else if (isset($_GET['orderActive'])) {
    $_SESSION['orderActive'] = "#".$_GET['orderActive'];
}

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
                            <use class="active-color" xlink:href="#order" />
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
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none">
                            <strong>Logout</strong>
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

                    <ul class="nav nav-pills nav-justified mb-3 orderNav" id="pills-tab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pill1" data-bs-toggle="pill" data-bs-target="#div1" type="button" role="tab" aria-controls="pills-to-approve" aria-selected="true">Awaiting Approval</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill2" data-bs-toggle="pill" data-bs-target="#div2" type="button" role="tab" aria-controls="pills-to-confirm" aria-selected="false">Awaiting Payment</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill3" data-bs-toggle="pill" data-bs-target="#div3" type="button" role="tab" aria-controls="pills-to-receive" aria-selected="false">Processing Order</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill4" data-bs-toggle="pill" data-bs-target="#div4" type="button" role="tab" aria-controls="pills-completed" aria-selected="false">Awaiting Shipment</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill5" data-bs-toggle="pill" data-bs-target="#div5" type="button" role="tab" aria-controls="pills-completed" aria-selected="false">Awaiting Pickup</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill6" data-bs-toggle="pill" data-bs-target="#div6" type="button" role="tab" aria-controls="pills-completed" aria-selected="false">Completed Order</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill7" data-bs-toggle="pill" data-bs-target="#div7" type="button" role="tab" aria-controls="pills-completed" aria-selected="false">Cancelled Order</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill8" data-bs-toggle="pill" data-bs-target="#div8" type="button" role="tab" aria-controls="pills-completed" aria-selected="false">Manual Verification</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pill9" data-bs-toggle="pill" data-bs-target="#div9" type="button" role="tab" aria-controls="pills-completed" aria-selected="false">Refunded Order</button>
                        </li>

                        <li class="nav-item create-new-button" role="presentation">
                            <button class="nav-link"  id="pill10" data-bs-toggle="pill" data-bs-target="#div10" type="button" role="tab" aria-controls="pills-create" aria-selected="false">Create Order</button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="div1" role="tabpanel" aria-labelledby="pills-to-approve-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list/order-list-approve.php');
                            ?>
                        </div>

                        <div class="tab-pane fade" id="div2" role="tabpanel" aria-labelledby="pills-to-cofirm-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list/order-list-confirm.php');
                            ?>
                        </div>

                        <div class="tab-pane fade" id="div3" role="tabpanel" aria-labelledby="pills-to-receive-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list/order-list-receive.php');
                            ?>
                        </div>

                        <div class="tab-pane fade" id="div4" role="tabpanel" aria-labelledby="pills-complete-tab">
                            <?php
                            include('../components/order/order-header.php');
                            include('../crud/order/order-list/order-list-completed.php');
                            ?>
                        </div>  

                        <div class="tab-pane fade" id="div10" role="tabpanel" aria-labelledby="pills-create-tab">
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

    <script type="text/javascript">
        var selectedTab = document.querySelector('<?php echo $_SESSION['orderActive'] ?>')
        var showTab = new bootstrap.Tab(selectedTab)
        showTab.show()
    </script>
</body>

</html>