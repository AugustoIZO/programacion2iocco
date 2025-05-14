<?php
$host = 'localhost';  
$db   = 'actividad3';  
$port = 3306;  
$user = 'root';
$pass = '';
$charset = 'utf8mb4';  
$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,    // Excepciones en caso de error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,          // Fetch por defecto en array asociativo
    PDO::ATTR_EMULATE_PREPARES   => false,                     // Sentencias preparadas reales
];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion exitosa";
} catch (PDOException $e) {
    echo "Error al conectar" . $e->getMessage();
}


?>