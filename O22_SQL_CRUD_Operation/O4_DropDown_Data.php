<?php

include("./O1_connection_With_Database.php");

echo "<br/>";

$Employee = $conn->prepare("SELECT id,NAME FROM EMPLOYEE");
$Employee->execute();

$AllEmployees = $Employee->fetchAll();

// print_r($AllEmployees);

echo "<select>";
echo "<option>SELECT NAME</option>";
foreach($AllEmployees as $Emp){
    echo "<option value=".$Emp['id'].">".$Emp['NAME']."</option>";
}
echo "</select>";


?>