<?php
$pdo = null;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=actividad3;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $idCuentaOrigen = 1;
    $idCuentaDestino = 999;
    $monto = 100.00;

    $pdo->beginTransaction();

 
    $stmt = $pdo->prepare("SELECT saldo FROM cuentas WHERE id = :id");
    $stmt->execute(['id' => $idCuentaOrigen]);
    $saldoOrigen = $stmt->fetchColumn();

    if ($saldoOrigen === false) {
        throw new Exception("La cuenta de origen no existe.");
    }

    if ($saldoOrigen < $monto) {
        throw new Exception("Saldo insuficiente.");
    }


    $stmt = $pdo->prepare("UPDATE cuentas SET saldo = saldo - :monto WHERE id = :id");
    $stmt->execute(['monto' => $monto, 'id' => $idCuentaOrigen]);


    $stmt = $pdo->prepare("UPDATE cuentas SET saldo = saldo + :monto WHERE id = :id");
    $stmt->execute(['monto' => $monto, 'id' => $idCuentaDestino]);

    $pdo->commit();
    echo "Transferencia realizada con éxito.";

} catch (Exception $e) {
    if ($pdo && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    echo "Error durante la transferencia: " . $e->getMessage();
}
?>
