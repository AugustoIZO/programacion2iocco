<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=actividad3;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $productos = [
        ['nombre' => 'Remera', 'precio' => 2500.00],
        ['nombre' => 'Pantalon', 'precio' => 3800.00],
        ['nombre' => 'Zapatillas', 'precio' => 7200.50]
    ];

    $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
    $stmt = $pdo->prepare($sql);

    foreach ($productos as $p) {
        $stmt->execute(['nombre' => $p['nombre'], 'precio' => $p['precio']]);
    }

    echo "Productos insertados correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
