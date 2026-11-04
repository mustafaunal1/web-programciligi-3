<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=otopusula;charset=utf8", "root", "");
} catch (PDOException $e) {
    die("Veritabanı Hatası: " . $e->getMessage());
}
?>