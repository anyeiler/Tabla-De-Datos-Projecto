<?php
$host = '127.0.0.1';
$dbname = 'Tabla-De-Datos';
$username = 'postgres';
$password = '123456789';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit();
}
?>