<?php
$serverhost = "localhost";
$username = "PhpAdmin";
$password = "farhan@8130310586@1234";
$database = "college";  // Replace with your actual DB name
$port = 3308;

$conn = mysqli_connect($serverhost, $username, $password, $database, $port);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully to XAMPP MySQL on port 3308";
?>