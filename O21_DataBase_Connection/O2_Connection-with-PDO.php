<?php
$host = 'localhost';
$db   = 'farhankart';
$user = 'root';
$pass = 'farhan@8130310586@1234';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully with PDO";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


echo "<br/>";

// Run the query and fetch all results as a numeric array
$result = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_NUM);

foreach ($result as $table) {
    echo "Table: " . $table[0] . "<br/>";
}

// $stmt = $pdo->query("SELECT * FROM products");

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['name'] . " - ₹" . $row['price'] . "<br/>";
// }


?>