<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Add Employee</title>

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

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Add Employee:</h1>

                <form action="addEmployeeScript.php" method="post">
                    <table>
                        <tr>
                            <td align="right">Employee ID:</td>
                            <td align="left"><input type="text" name="EmployeeID" value="<?php echo $EmployeeID ?>"></td>
                        </tr>

                        <tr>
                            <td align="right">First Name:</td>
                            <td align="left"><input type="text" name="firstname" value="<?php echo $First ?>"></td>
                        </tr>

                        <tr>
                            <td align="right">Last Name:</td>
                            <td align="left"><input type="text" name="lastname" value="<?php echo $Last ?>"></td>
                        </tr>

                        <tr>
                            <td align="right">Email:</td>
                            <td align="left"><input type="text" name="email" value="<?php echo $Email ?>"></td>
                        </tr>

                        <tr>
                            <td align="right">Password:</td>
                            <td align="left"><input type="text" name="password" value="<?php echo $Password ?>"></td>
                        </tr>

                        <tr>
                            <td align="right">Role:</td>
                            <td align="left"><input type="text" name="Role" value="<?php echo $Role ?>"></td>
                        </tr>

                    </table>
                    <input type="submit">
                </form>

            </div>
        </div>
    </div>
</body>