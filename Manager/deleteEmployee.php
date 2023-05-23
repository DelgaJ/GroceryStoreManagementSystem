<?php

$ID = (int)$_GET['id'];
$EmployeeID = $ID;

// Create connection
$servername = "localhost";
$username = "root";
$password = "root";
$database = "grocery";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Update everything except name and description
$sql = "DELETE FROM `Employee` WHERE `EmployeeID` = $EmployeeID";

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated!";
    header("Location: Employee.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
