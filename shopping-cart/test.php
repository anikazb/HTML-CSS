<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=sessiondb", "root", "123456789kK@p");
    echo "CONNECTED OK!";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
?>
