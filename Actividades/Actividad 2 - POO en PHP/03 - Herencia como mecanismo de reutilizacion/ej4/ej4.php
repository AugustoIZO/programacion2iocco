<?php
abstract class Figura{
	abstract public function calcularArea();
}

class Cuadrado extends Figura {
	private $lado;

	public function __construct($lado) {
		$this->lado = $lado;
	}
	public function calcularArea() {
		return $this->lado * $this->lado;
	}
}
$cuadro = new Cuadrado (5);
echo "Area del cuadrado: " . $cuadro->calcularArea() . "\n";


?>
