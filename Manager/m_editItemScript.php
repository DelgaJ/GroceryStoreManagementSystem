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
$sql = "UPDATE `Item` SET `ItemID` = $ItemID, `Name` = '$Name', `Description` = '$Desc',`MSRP`= $MSRP,`Qty`= $Qty,`DepartmentID`= $DeptID,`SupplierID`= $SuppID  WHERE `ItemID` = $ItemID";

$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated!";
    header("Location: m_Inventory.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
