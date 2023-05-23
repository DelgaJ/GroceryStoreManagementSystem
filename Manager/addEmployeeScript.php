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

//Update everything except name and description
$sql = "INSERT INTO `Employee`(`email`, `password`, `EmployeeID`, `firstname`, `lastname`, `Role`) VALUES ('$Email','$Password',$EmployeeID,'$First','$Last','$Role')";

$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: Employee.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
