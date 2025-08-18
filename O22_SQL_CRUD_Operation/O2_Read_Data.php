<?php
include("./O1_config.php");

// Prepare and execute the query
$getStudent = $conn->prepare("SELECT * FROM EMPLOYEE");
$getStudent->execute();

// Fetch all rows as numeric arrays
$students = $getStudent->fetchAll(PDO::FETCH_ASSOC);

// Print the result
echo "<pre/>";
print_r($students);

echo "<table border='1'>";
foreach ($students as $student) {
    echo "<tr><td>" . $student['NAME'] . "</td></tr>";
}
echo "</table>";


echo "<table border='1'>";
echo "<tr><th>Name</th><th> AGE </th><th>Email</th></tr>";
foreach ($students as $student) {
    echo "<tr><td>" . $student['NAME'] . "</td><td>" . $student['AGE'] . "</td><td>" . $student['EMAIL'] . "</td></tr>";
}
echo "</table>";
?>