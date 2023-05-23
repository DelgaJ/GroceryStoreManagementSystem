<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Edit Employee</title>

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

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <h1 class="h3 mb-2 text-gray-800">Edit Profile:</h1>

                <?php

                //Retrieve Item ID from URL

                $ID = (int)$_GET['id'];


                $servername = "localhost";
                $username = "root";
                $password = "root";
                $database = "grocery";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $ID = $_COOKIE["ID"];

                $sql = "SELECT * FROM `Employee` WHERE EmployeeID = $ID";
                $result = $conn->query($sql);
                $count = 0;




                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $EmployeeID = $row['EmployeeID'];
                        $First = $row["firstname"];
                        $Last = $row["lastname"];
                        $Email = $row["email"];
                        $Password = $row["password"];
                        $Role = $row["Role"];
                    }
                } else {
                    echo "0 results";
                    die;
                }



                ?>

                <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); 
                ?>


                <form action="profileScript.php" method="post">
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
                    <?php

                    $sql = "UPDATE `Employee` SET  `Role` = $Role WHERE `EmployeeID` = $ID";

                    $result = $conn->query($sql);

                    if ($result === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        //echo "Error updating record: " . $conn->error;
                    }
                    ?>


                    <input type="submit">
                </form>

            </div>
        </div>
    </div>
</body>