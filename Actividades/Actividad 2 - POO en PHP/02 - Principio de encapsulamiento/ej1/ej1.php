<?php
class Cuentabancaria {
	private $saldo;
	
	public function __construct($saldoInicial){
		$this->saldo = $saldoInicial;
}
	public function getSaldo() {
		return $this->saldo;
}
	public function depositar($monto) {
		if ($monto > 0){
			$this->saldo += $monto;
			echo "Depositado {$monto}. Nuevo saldo: {$this->saldo}.";
		} else {
			echo "El monto debe ser positivo.";
		}
	}
}
$cuenta = new Cuentabancaria(1000);
echo $cuenta->getSaldo();
$cuenta->depositar(500);
?>
