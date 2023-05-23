<?php

$EmployeeID = $_POST['EmployeeID'];
$First = $_POST["firstname"];
$Last = $_POST["lastname"];
$Email = $_POST["email"];
$Password = $_POST["password"];
$Role = $_POST["Role"];

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

//Update employee
$sql = "UPDATE `Employee` SET `email`='$Email',`password`='$Password',`EmployeeID`=$EmployeeID,`firstname`='$First',`lastname`='$Last',`Role`='$Role' WHERE `EmployeeID`=$EmployeeID";

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated!";
    header("Location: Employee.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
