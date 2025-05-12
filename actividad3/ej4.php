<?php
$nuevoEstado = 'activo';
$idUsuario = 1; 

try {
    $pdo = new PDO("mysql:host=localhost;dbname=actividad3;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "UPDATE usuarios SET estado = :estado WHERE id = :id";
    $stmt = $pdo->prepare($sql);

  
    $stmt->execute([
        'estado' => $nuevoEstado,
        'id' => $idUsuario
    ]);


    if ($stmt->rowCount() > 0) {
        echo "Estado del usuario actualizado correctamente.";
    } else {
        echo "No se actualizo ningún usuario.";
    }

} catch (PDOException $e) {
    echo "Error al actualizar estado: " . $e->getMessage();
}
