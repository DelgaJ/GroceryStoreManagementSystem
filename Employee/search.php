<?php

$search = $_POST['search'];

$conn = new mysqli("localhost", "root", "root", "grocery");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `Item` WHERE `Name` like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $Item = $_POST['ItemID'];

        $ItemID = $row["ItemID"];
        $Name = $row["Name"];
        $Desc = $row["Description"];
        $MSRP = $row["MSRP"];
        $Qty = $row["Qty"];
        $DeptID = $row["DepartmentID"];
        $SuppID = $row["SupplierID"];


?>


        <tr>
            <th><?php echo $count ?></th>
            <th><?php echo $row["ItemID"] ?></th>
            <th><?php echo $row["Name"]  ?></th>
            <th><?php echo $row["Description"]  ?></th>
            <th><?php echo $row["MSRP"]  ?></th>
            <th><?php echo $row["Qty"]  ?></th>
            <th><?php echo $row["DepartmentID"]  ?></th>
            <th><?php echo $row["SupplierID"]  ?></th>

            <th> <a href="editItem.php?id=<?php echo $row["ItemID"] ?>">Edit</a> <a href="deleteItem.php?id=<?php echo $row["ItemID"] ?>">Delete</a></th>


        </tr>
<?php

    }
}

?>
}