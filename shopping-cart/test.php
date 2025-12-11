<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=sessiondb", "root", "");
    echo "CONNECTED OK!";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
?>
