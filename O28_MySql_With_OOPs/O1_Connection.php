<?php
    $host = "localhost";
    $username = "root";
    $password = "farhan@8130310586@1234";

    try {
        $conn = new PDO("mysql:host=$host;dbname=farhankart", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection successful!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>