<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=sessiondb", "root", "12345");
    echo "CONNECTED OK!";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
?>
