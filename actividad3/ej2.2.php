<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=actividad3;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM productos ORDER BY id DESC";
    $stmt = $pdo->query($sql);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($productos as $p) {
        echo "ID: {$p['id']} - Nombre: {$p['nombre']} - Precio: {$p['precio']}<br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
