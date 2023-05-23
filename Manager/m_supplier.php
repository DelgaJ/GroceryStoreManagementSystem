<!DOCTYPE html>

<head>
    <title>Cougar System - Supplier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="m_style2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="managerMenu.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cougar Mart <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Inventory -->
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Employee -->
            <li class="nav-item">
                <a class="nav-link" href="employee.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Employee</span></a>
            </li>

            <!-- Nav Item - Inventory -->
            <li class="nav-item">
                <a class="nav-link" href="m_Inventory.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inventory</span></a>
            </li>

            <!-- Nav Item - Schedule -->
            <li class="nav-item">
                <a class="nav-link" href="m_schedule.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Schedule</span></a>
            </li>

            <!-- Nav Item - Supplier -->
            <li class="nav-item">
                <a class="nav-link" href="m_supplier.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Supplier</span></a>
            </li>

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="m_profile.php?id=<?php echo $EmployeeID ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Nav Item - Log Out -->
            <li class="nav-item">
                <a class="nav-link" href="..\index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Log Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Page Heading -->
                <h1>Suppliers</h1>
            </div>
            <!-- /.container-fluid -->
            <div class="table-responsive">
                <table class="table text-dark text-center">
                    <thead class="text-uppercase">
                        <tr class="table-active">
                            <th scope="col">#</th>
                            <th scope="col">SupplierID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $conn = new mysqli("localhost", "root", "root", "grocery");

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM Supplier";
                        $result = $conn->query($sql);
                        $count = 0;

                        if ($result->num_rows >  0) {

                            while ($row = $result->fetch_assoc()) {
                                $count = $count + 1;
                        ?>


                                <tr>
                                    <th><?php echo $count ?></th>
                                    <th><?php echo $row["SupplierID"] ?></th>
                                    <th><?php echo $row["Name"]  ?></th>
                                    <th><?php echo $row["Description"]  ?></th>
                                    <th><?php echo $row["Address"]  ?></th>
                                    <th><?php echo $row["Phone"]  ?></th>
                                    <th><?php echo $row["Email"]  ?></th>
                                    <th><?php echo $row["Status"]  ?></th>


                                    <th> <a href="mailto:<?php echo $row["Email"] ?>"> Contact</a></th>


                                </tr>
                        <?php

                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>