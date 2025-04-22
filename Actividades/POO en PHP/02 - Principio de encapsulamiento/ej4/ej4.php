<?php
class Vehiculo{
	private $kilometros;
	public function __construct($kmInicial){
		$this->kilometros = $kmInicial;
	}
	public function getKilometros(){
		return $this->kilometros;
	}
	public function avanzar($km){
		if ($km > 0) {
			$this->kilometros += $km;
		}
	}
}

$auto = new Vehiculo(10000);
$auto->avanzar(500);
echo "Kilometros: " . $auto->getKilometros();

?>
