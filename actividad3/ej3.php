<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=actividad3;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nombreBuscado = "Remera";

$sql = "SELECT * FROM productos WHERE nombre = :nombre";
$stmt = $pdo->prepare($sql);
$stmt->execute(['nombre' => $nombreBuscado]);

$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($productos) {
        foreach ($productos as $p) {
            echo "ID: {$p['id']} - Nombre: {$p['nombre']} - Precio: {$p['precio']}<br>";
        }
    } else {
        echo "No se encontraron productos con ese nombre.";
    }
} catch (PDOException $e) {
    echo "Error al conectar o ejecutar la consulta: " . $e->getMessage();
}