<?php
class Database {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=actividad3;charset=utf8", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function createUser($nombre, $email, $estado = 'pendiente') {
        $sql = "INSERT INTO usuarios (nombre, email, estado) VALUES (:nombre, :email, :estado)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nombre' => $nombre,
            'email' => $email,
            'estado' => $estado
        ]);
        return $this->pdo->lastInsertId();
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUserEstado($id, $nuevoEstado) {
        $sql = "UPDATE usuarios SET estado = :estado WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'estado' => $nuevoEstado,
            'id' => $id
        ]);
        return $stmt->rowCount();
    }
}
