<!DOCTYPE html>

<head>
    <meta charset="utf-8">

    <title>Cougar System - Inventory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style2.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="menu.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Cougar Mart <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Inventory -->
            <li class="nav-item">
                <a class="nav-link" href="inventory.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inventory</span></a>
            </li>

            <!-- Nav Item - Schedule -->
            <li class="nav-item">
                <a class="nav-link" href="schedule.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Schedule</span></a>
            </li>

            <!-- Nav Item - Supplier -->
            <li class="nav-item">
                <a class="nav-link" href="supplier.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Supplier</span></a>
            </li>

            <!-- Nav Item - Profile -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php?id=<?php echo $row[""] ?>">
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

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1> Inventory </h1>

                    <form action="" method="GET">

                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                                echo $_GET['search'];
                                                                            } ?>" class="form-control" placeholder="Search data">
                        <button type="submit">Search</button>

                    </form>

                </div>

                <div class="table-responsive">
                    <table class="table text-dark text-center">
                        <thead class="text-uppercase">
                            <tr class="table-active">
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">MSRP</th>
                                <th scope="col">Qty</th>
                                <th scope="col">DepartmentID</th>
                                <th scope="col">SupplierID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php


                            $conn = new mysqli("localhost", "root", "root", "grocery");

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            if (isset($_GET['search'])) {
                                $filtervalues = $_GET['search'];
                                $sql = "SELECT * FROM `Item` WHERE `Name` LIKE '%$filtervalues%' ";

                                $result = $conn->query($sql);
                                $count = 0;
                            }

                            // $sql = "SELECT * FROM Item";
                            //$result = $conn->query($sql);
                            //$count = 0;





                            if ($result->num_rows >  0) {

                                while ($row = $result->fetch_assoc()) {
                                    $count = $count + 1;

                                    $Item = $_POST['ItemID'];

                                    $ItemID = $row["ItemID"];
                                    $Name = $row["Name"];
                                    $Desc = $row["Description"];
                                    $MSRP = $row["MSRP"];
                                    $Qty = $row["Qty"];
                                    $DeptID = $row["DepartmentID"];
                                    $SuppID = $row["SupplierID"];


                            ?>


                                    <tr>
                                        <th><?php echo $count ?></th>
                                        <th><?php echo $row["ItemID"] ?></th>
                                        <th><?php echo $row["Name"]  ?></th>
                                        <th><?php echo $row["Description"]  ?></th>
                                        <th><?php echo $row["MSRP"]  ?></th>
                                        <th><?php echo $row["Qty"]  ?></th>
                                        <th><?php echo $row["DepartmentID"]  ?></th>
                                        <th><?php echo $row["SupplierID"]  ?></th>

                                        <th> <a href="editItem.php?id=<?php echo $row["ItemID"] ?>">Edit</a> <a href="deleteItem.php?id=<?php echo $row["ItemID"] ?>">Delete</a></th>


                                    </tr>
                                <?php

                                }
                            } else {

                                $sql = "SELECT * FROM `Item`";

                                $result = $conn->query($sql);
                                $count = 0;


                                while ($row = $result->fetch_assoc()) {
                                    $count = $count + 1;

                                    $Item = $_POST['ItemID'];

                                    $ItemID = $row["ItemID"];
                                    $Name = $row["Name"];
                                    $Desc = $row["Description"];
                                    $MSRP = $row["MSRP"];
                                    $Qty = $row["Qty"];
                                    $DeptID = $row["DepartmentID"];
                                    $SuppID = $row["SupplierID"];

                                ?>

                                    <tr>
                                        <th><?php echo $count ?></th>
                                        <th><?php echo $row["ItemID"] ?></th>
                                        <th><?php echo $row["Name"]  ?></th>
                                        <th><?php echo $row["Description"]  ?></th>
                                        <th><?php echo $row["MSRP"]  ?></th>
                                        <th><?php echo $row["Qty"]  ?></th>
                                        <th><?php echo $row["DepartmentID"]  ?></th>
                                        <th><?php echo $row["SupplierID"]  ?></th>

                                        <th> <a href="editItem.php?id=<?php echo $row["ItemID"] ?>">Edit</a> <a href="deleteItem.php?id=<?php echo $row["ItemID"] ?>">Delete</a></th>


                                    </tr>

                            <?php
                                }
                            }

                            ?>


                        </tbody>
                    </table>

                    <!-- Add Item -->

                    <form action="addItem.php" method="GET">
                        <table>
                            <tr>
                                <td align="left"><button type="submit">Add</button></td>
                            </tr>
                        </table>
                    </form>


                </div>
            </div>

        </div>