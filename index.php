<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <title>Cougar Mart - Login</title>
</head>

<body>

    <!-- for background -->
    <div class="background"></div>

    <div class="container">

        <!-- Heading to display system name at top of page-->
        <h1>Cougar System - Login</h1>

        <form action="" method="POST">

            <!-- If user has entered an ID -->
            <?php if (!empty($_POST)) : ?>

                <?php

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $database = "grocery";

                // Create connection to database
                $conn = new mysqli($servername, $username, $password, $database);

                // Check connection to database
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $EmployeeID = $_POST['EmployeeID'];

                //Create a Cookie to store id
                $cookie_name = "ID";
                $cookie_value = $EmployeeID;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day

                //Check if entered ID exists within the system 
                $sql = "SELECT * FROM Employee WHERE EmployeeID = $EmployeeID";
                $result = $conn->query($sql);


                //If exists, send to main menu, else let the user know there was no results
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                        if ($row['Role'] == 'Manager') {
                            header("Location: Manager/managerMenu.php");
                        } else {
                            header("Location: Employee/menu.php");
                        }
                    }
                } else {
                    echo "0 results";
                    die;
                }

                ?>

                <!-- Input Box for Employee ID-->
            <?php else : ?>

                <div class="form-item">
                    <span class="material-icons-outlined">
                        account_circle
                    </span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        ID: <input type="text" name="EmployeeID"><br>
                        <input type="submit">
                    </form>
                </div>

            <?php endif; ?>

        </form>

    </div>

</body>

<!-- End Input Form -->



</html>