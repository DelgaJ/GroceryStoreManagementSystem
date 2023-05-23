<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cougar System - Menu</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style2.css" rel="stylesheet">

</head>

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 75%;
    }

    .content {
        background-image: linear-gradient(SteelBlue, lightgrey);
    }
</style>

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
            <hr class=" sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1> Menu </h1>

                    <!-- Retrieve ID Cookie from index-->
                    <?php
                    if (!isset($_COOKIE["ID"])) {
                        echo "Cookie named '" . "ID" . "' is not set!";
                        exit;
                    }
                    ?>
                </div>

                <img src="groceryImage.jpeg" class="center" alt="Image">

                <div id="container">
                    <button type="button" id="content" class="button-9" onclick="window.location.href='Inventory.php'">Inventory</button>
                    <button type="button" id="content" class="button-9" onclick="window.location.href='Schedule.php'">Schedule</button>
                    <button type="button" id="content" class="button-9" onclick="window.location.href='Supplier.php'">Supplier</button>
                </div>

            </div>





</body>