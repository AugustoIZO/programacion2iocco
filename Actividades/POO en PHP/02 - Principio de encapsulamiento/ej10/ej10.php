<?php
class CuentaCorriente {
	private $saldo;
	private $limite;

	public function __construct($saldo, $limite) {
		$this->saldo = $saldo;
		$this->limite = $limite;
	}
	public function getSaldo() {
		return $this->saldo;
	}
	public function retirar($monto) {
		if ($monto > 0 && $monto <= $this->saldo +$this->limite) {
			$this->saldo -= $monto;
		}
	}
}

$cc = new CuentaCorriente(1000, 500);
$cc->retirar(5000);
echo "Saldo despues del retiro: " . $cc->getSaldo();


?>
