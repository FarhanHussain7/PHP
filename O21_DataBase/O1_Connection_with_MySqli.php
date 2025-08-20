<?php
$servername = "localhost";
$username = "root";
$password = "farhan@8130310586@1234"; // Empty string if no password is set
$dbname = "farhankart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// $conn = new mysqli("localhost", "root", "farhan@8130310586@1234", "mydb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "<br/>";

$result = $conn->query("SHOW TABLES")->fetch_all();

foreach ($result as $table) {
    echo "Table: " . $table[0] . "<br/>";
}

$sql = "SELECT * FROM employee";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "Name: " . $row['NAME'] . "  age : ". $row['AGE']." email : " . $row['EMAIL'] . "<br/>";
    }
} else {
    echo "No products found.";
}

?>