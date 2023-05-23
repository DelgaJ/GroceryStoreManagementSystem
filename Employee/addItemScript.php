<?php

$ItemID = $_POST["ItemID"];
$Name = $_POST["Name"];
$Desc = $_POST["Description"];
$MSRP = $_POST["MSRP"];
$Qty = $_POST["Qty"];
$DeptID = $_POST["DepartmentID"];
$SuppID = $_POST["SupplierID"];

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
$sql = "INSERT INTO `Item`(`ItemID`, `Name`, `Description`, `MSRP`, `Qty`, `DepartmentID`, `SupplierID`) VALUES ($ItemID, '$Name', '$Desc', $MSRP, $Qty, $DeptID, $SuppID)";

$result = $conn->query($sql);

if ($result === TRUE) {
    header("Location: Inventory.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
