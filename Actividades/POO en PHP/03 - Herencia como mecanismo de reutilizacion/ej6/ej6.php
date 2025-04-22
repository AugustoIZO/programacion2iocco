<?php
class Cuenta {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function depositar($monto) {
        $this->saldo += $monto;
    }

    public function retirar($monto) {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

class CuentaPremium extends Cuenta {
    private $bonificacion;

    public function __construct($saldo, $bonificacion) {
        parent::__construct($saldo);
        $this->bonificacion = $bonificacion;
    }

    public function aplicarBonificacion() {
        $this->saldo += $this->saldo * ($this->bonificacion / 100);
    }
}


$cp = new CuentaPremium(1000, 10);
$cp->aplicarBonificacion();
echo "Saldo tras bonificación: " . $cp->getSaldo() . "\n";
?>