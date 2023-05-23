<?php

$ID = (int)$_GET['id'];
$ItemID = $ID;

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
$sql = "DELETE FROM `Item` WHERE `ItemID` = $ItemID";

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated!";
    header("Location: Inventory.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
